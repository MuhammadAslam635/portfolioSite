<?php
namespace App\Livewire\Admin;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use App\Traits\ToastTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AdminViewBlogDetailComponent extends Component
{
    use ToastTrait;

    public $blog;
    public $showConfirmModal = false;
    public $showdrawer       = false;
    public $blogTagId;
    public $tagId;
    public $tags;

   

    public function mount($slug)
    {
        try {
            $this->blog = Blog::
                where('slug', $slug)
                ->first();

            if (! $this->blog) {
                $this->errorToast('Blog not found.');
                return redirect()->route('blogs');
            }

            // Load tags for dropdowns
            $this->loadTags();

        } catch (\Exception $e) {
            Log::error('Error loading blog: ' . $e->getMessage());
            $this->errorToast('An error occurred while loading the blog.');
            return redirect()->route('blogs');
        }
    }

    public function loadTags()
    {
        $this->tags = Tag::orderBy('name')->get();
    }

    public function openModal($id)
    {
        try {
            $blogTag = BlogTag::find($id);
            if (! $blogTag) {
                $this->errorToast('Blog tag not found.');
                return;
            }

            $this->blogTagId = $id;
            // $this->tagId = $blogTag->tag_id;
            $this->showConfirmModal = true;

        } catch (\Exception $e) {
            Log::error('Error opening modal: ' . $e->getMessage());
            $this->errorToast('An error occurred while opening the edit modal.');
        }
    }

    public function openDrawer()
    {
        $this->reset(['tagId']);
        $this->showdrawer = true;
    }

    public function editTag()
    {
        $this->validate(
            [
                'tagId' => 'required|unique:blog_tags,tag_id'.$this->tagId,
            ]
        );

        try {
            DB::beginTransaction();

            $blogTag = BlogTag::find($this->blogTagId);

            if (! $blogTag) {
                $this->errorToast('Blog tag not found.');
                DB::rollBack();
                return;
            }

            // Convert tagId to integer to ensure proper comparison
            $newTagId     = (int) $this->tagId;
            $currentTagId = (int) $blogTag->tag_id;

            // Debug: Show what we're working with
            // dump([
            //     'blog_id'        => $this->blog->id,
            //     'current_tag_id' => $currentTagId,
            //     'new_tag_id'     => $newTagId,
            //     'blog_tag_id'    => $this->blogTagId,
            //     'are_same'       => $currentTagId === $newTagId,
            // ]);

            // If the tag is the same as current, no need to update
            if ($currentTagId === $newTagId) {
                $this->showConfirmModal = false;
                $this->dispatch('toast', [
                    'type'    => 'info',
                    'message' => 'No changes were made - same tag selected.',
                ]);
                $this->reset(['blogTagId', 'tagId']);
                DB::rollBack();
                return;
            }

            // Check if this tag is already assigned to this blog (excluding current record)
            $existingTag = BlogTag::where('blog_id', $this->blog->id)
                ->where('tag_id', $newTagId) // Use the converted integer
                ->where('id', '!=', $this->blogTagId)
                ->first();

            // Debug the result
            // dump([
            //     'existing_tag_found' => $existingTag ? true : false,
            //     'existing_tag_data'  => $existingTag ? $existingTag->toArray() : null,
            // ]);

            if ($existingTag) {
                $this->errorToast('This tag is already assigned to the blog.');
                DB::rollBack();
                return;
            }

            // Double-check by getting all existing tags for this blog
            $existingTagIds = BlogTag::where('blog_id', $this->blog->id)
                ->where('id', '!=', $this->blogTagId)
                ->pluck('tag_id')
                ->map(function ($id) {return (int) $id;})
                ->toArray();

            // dump([
            //     'existing_tag_ids'       => $existingTagIds,
            //     'new_tag_id_in_existing' => in_array($newTagId, $existingTagIds),
            // ]);

            if (in_array($newTagId, $existingTagIds)) {
                $this->errorToast('This tag is already assigned to the blog.');
                DB::rollBack();
                return;
            }

            // If we get here, proceed with the update
            // dump('Proceeding with update...');

            $blogTag->update([
                'tag_id' => $newTagId,
            ]);

            DB::commit();

            $this->showConfirmModal = false;
            $this->successToast('Tag updated successfully.');
            $this->reset(['blogTagId', 'tagId']);
            $this->refreshBlogData();

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating tag: ' . $e->getMessage());

            // dump([
            //     'error_message' => $e->getMessage(),
            //     'error_trace'   => $e->getTraceAsString(),
            // ]);

            if (str_contains($e->getMessage(), 'UNIQUE constraint failed') ||
                str_contains($e->getMessage(), 'Duplicate entry')) {
                $this->errorToast('This tag is already assigned to the blog.');
            } else {
                $this->errorToast('An error occurred while updating the tag: ' . $e->getMessage());
            }

            $this->showConfirmModal = false;
            $this->reset(['blogTagId', 'tagId']);
        }
    }

    public function createTag()
    {
        $this->validate(
            [
                'tagId' => 'required|exists:tags,id',
            ]
        );

        try {
            DB::beginTransaction();

            // Check if this tag is already assigned to this blog
            $existingTag = BlogTag::where('blog_id', $this->blog->id)
                ->where('tag_id', $this->tagId)
                ->exists();

            if ($existingTag) {
                $this->errorToast('This tag is already assigned to the blog.');
                DB::rollBack();
                return;
            }

            BlogTag::create([
                'blog_id' => $this->blog->id,
                'tag_id'  => $this->tagId,
            ]);

            DB::commit();

            $this->showdrawer = false;
            $this->successToast('Tag added successfully.');
            $this->reset(['tagId']);

            // Refresh the blog data to show new tag
            $this->refreshBlogData();

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error adding tag: ' . $e->getMessage());

            // Check if it's a unique constraint violation
            if (str_contains($e->getMessage(), 'UNIQUE constraint failed') ||
                str_contains($e->getMessage(), 'Duplicate entry')) {
                $this->errorToast('This tag is already assigned to the blog.');
            } else {
                $this->errorToast('An error occurred while adding the tag.');
            }

            $this->showdrawer = false;
            $this->reset(['tagId']);
        }
    }

    public function deleteTag($id)
    {
        // dd('Deleting tag with ID: ' . $id);
        try {


            $blogTag = BlogTag::find($id);

            if (! $blogTag) {
                $this->errorToast('Blog tag not found.');

                return;
            }

            $blogTag->delete();



            $this->successToast('Tag removed successfully.');

            // Refresh the blog data to reflect the deletion
            $this->refreshBlogData();

        } catch (\Exception $e) {

            Log::error('Error deleting tag: ' . $e->getMessage());
            $this->errorToast('An error occurred while removing the tag.');
        }
    }

    protected function refreshBlogData()
    {
        $this->blog = Blog::with(['category', 'tags', 'blogGalleries' => function ($query) {
            $query->orderBy('order', 'asc');
        }])
            ->where('id', $this->blog->id)
            ->first();
    }

    public function render()
    {
        return view('livewire.admin.admin-view-blog-detail-component', [
            'tags' => $this->tags ?? collect(),
        ]);
    }

    // Reset form when modals are closed
    public function updatedShowConfirmModal($value)
    {
        if (! $value) {
            $this->reset(['blogTagId', 'tagId']);
        }
    }

    public function updatedShowdrawer($value)
    {
        if (! $value) {
            $this->reset(['tagId']);
        }
    }
}

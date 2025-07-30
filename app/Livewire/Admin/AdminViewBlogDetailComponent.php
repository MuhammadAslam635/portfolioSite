<?php
namespace App\Livewire\Admin;

use App\Models\Tag;
use App\Traits\ToastTrait;
use Livewire\Component;

class AdminViewBlogDetailComponent extends Component
{
    use ToastTrait;
    public $blog;
    public $showConfirmModal = false;
    public $showdrawer = false;
    public $blogTag;
    public $tagId;
    public function mount($slug)
    {
        $this->blog = \App\Models\Blog::where('slug', $slug)->first();
        if (! $this->blog) {
            $this->errorToast('Blog not found.');
            return redirect()->route('blogs');
        }
    }
    public function openModal($id)
    {
        $this->blogTag           = $id;
        $this->showConfirmModal = true;
    }
    public function openDrawer(){
        $this->showdrawer = true;
    }
    public function editTag()
    {
        $this->validate([
            'tagId'  => 'required|exists:tags,id',
        ]);
        try {
            $blog = \App\Models\BlogTag::find($this->blogTag);
            if ($blog) {
                $blog->tag_id = $this->tagId;
                $blog->save();
                $this->showConfirmModal = false;
                $this->successToast('Tags updated successfully.');
                $this->reset(['blogTag', 'tagId']);
            } else {
                $this->errorToast('Blog not found.');
            }
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while updating the tag: ' . $e->getMessage());
            $this->showConfirmModal = false;
            $this->reset(['blogTag', 'tagId']);
        }
    }
    public function createTag(){
        $this->validate([
            'tagId' => 'required|exists:tags,id',
        ]);
        try {
            $blog = \App\Models\BlogTag::create([
                'blog_id' => $this->blog->id,
                'tag_id'  => $this->tagId,
            ]);
            if ($blog) {
                $this->showdrawer = false;
                $this->successToast('Tag added successfully.');
                $this->reset(['blogTag', 'tagId']);
            } else {
                $this->errorToast('Failed to add tag.');
            }
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while adding the tag: ' . $e->getMessage());
            $this->showConfirmModal = false;
            $this->reset(['blogTag', 'tagId']);
        }
    }

    public function render()
    {
        $tags = Tag::get();
        return view('livewire.admin.admin-view-blog-detail-component', get_defined_vars());
    }
}

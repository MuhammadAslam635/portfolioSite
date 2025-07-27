<?php
namespace App\Livewire\Admin;

use App\enums\StatusEnum;
use App\Models\Blog;
use App\Models\BlogGallery;
use App\Models\Category;
use App\Traits\ToastTrait;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllBlogsComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    use ToastTrait;
    #[Layout('components.layouts.app')]
    public $showConfirmModal = false;
    public $totalBlogs;
    public $publishedBlogs;
    public $draftedBlogs;
    public $pendingBlogs;
    public $archivedBlogs;
    public $search;
    public $category = "all";
    public $status = 'all';
    public $featured = 'all';
    public $latest = 'all';
    public $selectedBlogId;
    public $selectedBlog;
    public $Blogimage;
    public $caption;
    public $content;

    public function mount()
    {
        $this->totalBlogs     = Blog::count();
        $this->publishedBlogs = Blog::where('is_published', StatusEnum::ACTIVE->value)->count();
        $this->pendingBlogs   = Blog::where('is_published', StatusEnum::INACTIVE->value)->count();
        $this->draftedBlogs   = Blog::where('is_published', StatusEnum::DRAFT->value)->count();
        $this->archivedBlogs  = Blog::where('is_published', StatusEnum::ARCHIVED->value)->count();
    }
    public function addContentBlog($id)
    {
        $this->selectedBlogId = $id;
        $this->selectedBlog   = Blog::find($id);
        if (! $this->selectedBlog) {
            $this->errorToast("Blog not found.");
            return;
            $this->showConfirmModal = false;
            $this->warningToast("Blog not found.");
        }
        $this->showConfirmModal = true;
    }
    public function addBlogContent()
    {
        try {
            $this->validate([
                'selectedBlogId' => 'required|exists:blogs,id',
                'Blogimage'      => 'required|mimes:jpg,png,jpeg',
                'caption'        => 'nullable|string|max:255',
                'content'        => 'required|string|max:5000',
            ]);
            $blog = Blog::find($this->selectedBlogId);
            if (! $blog) {
                $this->errorToast("Blog not found.");
                return;
            }
            BlogGallery::create([
                'blog_id'     => $blog->id,
                'image'       => $this->Blogimage,
                'caption'     => $this->caption,
                'is_active'   => 1,
                'is_featured' => 1,
                'content'     => $this->content,
            ]);
            $this->successToast("Blog content added successfully.");
            $this->showConfirmModal = false;
            $this->reset(['selectedBlogId', 'Blogimage', 'caption', 'content']);
        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $query = Blog::where('name', 'like', '%' . $this->search . '%');
        if ($this->status != 'all') {
            $query->where('is_published', $this->status);
        }
        if ($this->category != 'all') {
            $query->where('category_id', $this->status);
        }
        if ($this->featured != 'all') {
            $query->where('is_featured', $this->status);
        }
        if ($this->latest == 'latest') {
            $query->where('created_at', 'desc');
        }
        if ($this->latest == 'oldest') {
            $query->where('created_at', 'asc');
        }
        $blogs      = $query->paginate(10);
        $categories = Category::all();
        return view('livewire.admin.all-blogs-component', get_defined_vars());
    }
}

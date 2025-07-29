<?php

namespace App\Livewire\Web\Blogs;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\BlogComment;
use App\Traits\ToastTrait;
class BlogDetailComponent extends Component
{
    use ToastTrait;
    #[Layout('components.layouts.base.base')]
    public $blogSlug;
    public $blog;
    public $relatedBlogs;
    #[Validate('required|string|max:255')]
    public $name;
    #[Validate('required|email|max:255')]
    public $email;
    #[Validate('required|string|max:1000')]
    public $comment;

    public function mount($slug)
    {
        $this->blogSlug = $slug;
        $this->blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
        $this->blog->update([
            'views' => $this->blog->views + 1,
        ]);
        $this->relatedBlogs = \App\Models\Blog::where('category_id', $this->blog->category_id)
            ->where('id', '!=', $this->blog->id)
            ->latest()
            ->take(3)
            ->get();
    }
    public function submitComment()
    {
        $this->validate();

        try{
            \App\Models\BlogComment::create([
            'blog_id' => $this->blog->id,
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
        ]);
        $this->blog->update([
            'comments_count' => $this->blog->comments_count + 1,
        ]);

        $this->successToast('Comment submitted successfully.');
        $this->reset(['name', 'email', 'comment']);
        }catch (\Exception $e) {
            $this->errorToast('An error occurred while submitting your comment: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.web.blogs.blog-detail-component');
    }
}

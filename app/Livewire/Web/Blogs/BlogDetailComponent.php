<?php

namespace App\Livewire\Web\Blogs;

use Livewire\Component;
use Livewire\Attributes\Layout;
class BlogDetailComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public $blogSlug;
    public $blog;
    public $relatedBlogs;

    public function mount($slug)
    {
        $this->blogSlug = $slug;
        $this->blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
        $this->relatedBlogs = \App\Models\Blog::where('category_id', $this->blog->category_id)
            ->where('id', '!=', $this->blog->id)
            ->latest()
            ->take(3)
            ->get();
    }
    public function render()
    {
        return view('livewire.web.blogs.blog-detail-component');
    }
}

<?php

namespace App\Livewire\Web\Blogs;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Blog;
use Livewire\WithPagination;
use App\Models\Subscribe;
use App\Traits\ToastTrait;
class BlogComponent extends Component
{
    use WithPagination;
    use ToastTrait;
    public $category = 'all';

    #[Layout('components.layouts.base.base')]
    public $email;
    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
        ]);
        Subscribe::create([
            'email' => $this->email,
        ]);
        // Here you can handle the subscription logic, e.g., saving to a database or sending a confirmation email.
       $this->successToast('Thank you for subscribing!');
        $this->email = ''; // Reset the email input after successful subscription
    }
    public function render()
    {
        $featuredBlog = Blog::where('is_featured', 1)
            ->orderBy('views', 'desc')
            ->latest()
            ->first();
            $query = Blog::published();
            if($this->category != 'all'){
                $query = $query->where('category_id',$this->category);
            }
        $blogs = $query->paginate(10);
        // dump($blogs);
        $categories = \App\Models\Category::all();
        return view('livewire.web.blogs.blog-component',get_defined_vars());
    }
}

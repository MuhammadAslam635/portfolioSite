<?php

namespace App\Livewire\Web\Blogs;

use Livewire\Component;
use Livewire\Attributes\Layout;
class BlogDetailComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public function render()
    {
        return view('livewire.web.blogs.blog-detail-component');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
class AdminCreateBlogComponent extends Component
{
    use \App\Traits\ToastTrait;
    use \Livewire\WithFileUploads;
    #[\Livewire\Attributes\Validate('required')]
    public string $name = "Test Blog";
    #[\Livewire\Attributes\Validate('required|unique:blogs,slug')]
    public string $slug = "test-blog";
    #[\Livewire\Attributes\Validate('required|mimes:jpg,png,jpeg')]
    public $image;
    public $category_id;
    public $is_featured = 1;
    public $reading_time = 5; // Default reading time in minutes
    public function genSlug()
    {
        $this->slug = \Illuminate\Support\Str::slug($this->name, '-');
    }
    public function createBlog(){
        try{
            $this->validate();
            if($this->image){
                $blogImage = \Carbon\Carbon::now()->timestamp.'.'.$this->image->extension();
                $this->image->storeAs('assets/blogs', $blogImage);
                $blogImagePath = 'blogs/'.$blogImage;
            }
            \App\Models\Blog::create([
                'user_id' => auth()->user()->id,
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $blogImagePath ?? '',
                'is_featured' => $this->is_featured,
                'reading_time' => $this->reading_time,
                'category_id' => $this->category_id,
                'is_published' => 1,
            ]);
            $this->successToast("Blog Created Successfully.");
        }catch(\Exception $e){
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $cats = \App\Models\Category::where('is_active', 1)->get();
        $tags = \App\Models\Tag::where('is_active', 1)->get();
        return view('livewire.admin.admin-create-blog-component',get_defined_vars());
    }
}

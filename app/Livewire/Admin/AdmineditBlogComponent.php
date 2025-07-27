<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Traits\ToastTrait;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class AdmineditBlogComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $blog;
    public $name;
    public $slug;
    public $reading_time;
    public $category_id;
    public $is_featured;
    public $image;
    public $newImage;
    public $blogSlug;
    public function mount($slug)
    {
        $this->blogSlug = $slug;
        $this->blog = \App\Models\Blog::where('slug', $this->blogSlug)->first();
        if ($this->blog) {
            $this->name = $this->blog->name;
            $this->slug = $this->blog->slug;
            $this->reading_time = $this->blog->reading_time;
            $this->category_id = $this->blog->category_id;
            $this->is_featured = $this->blog->is_featured;
            $this->image = $this->blog->image;
        }
    }
    public function genSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function updateBlog()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $this->blog->id,
            'newImage' => 'nullable|mimes:jpg,png,jpeg',
            'category_id' => 'required|exists:categories,id',
            'is_featured' => 'required',
            'reading_time' => 'required|integer|min:1',
        ]);
        try {
            if ($this->newImage) {
                $blogImage = \Carbon\Carbon::now()->timestamp . '.' . $this->newImage->extension();
                $this->newImage->storeAs('assets/blogs', $blogImage);
                $blogImagePath = 'blogs/' . $blogImage;
            } else {
                $blogImagePath = $this->image;
            }
            $this->blog->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $blogImagePath,
                'is_featured' => $this->is_featured,
                'reading_time' => $this->reading_time,
                'category_id' => $this->category_id,
                'is_published' => 1,
            ]);
            $this->successToast("Blog Updated Successfully.");
        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $cats = Category::where('is_active', 1)->get();
        return view('livewire.admin.adminedit-blog-component',get_defined_vars());
    }
}

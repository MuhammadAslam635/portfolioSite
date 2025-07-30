<?php
namespace App\Livewire\Admin;

use App\Traits\ToastTrait;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditBlogGalleryComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $gallery;
    public $image;
    public $newImage;
    public $caption;
    public $content;
    public function mount($id)
    {
        $this->gallery = \App\Models\BlogGallery::find($id);
        if (! $this->gallery) {
            session()->flash('error', 'Gallery not found.');
            return redirect()->route('blogs');
        }
        $this->image   = $this->gallery->image;
        $this->caption = $this->gallery->caption;
        $this->content = $this->gallery->content;
    }
    public function updateGallery()
    {
        $this->validate([
            'newImage' => 'nullable|image|max:1024',
            'caption'  => 'required|string|max:255',
            'content'  => 'required|string',
        ]);
        try {

            if ($this->newImage) {
                $image = Carbon::now()->timestamp . '.' . $this->newImage->extension();
                $this->newImage->storeAs('assets/blogs/gallery', $image);
                $imagePath            = 'blogs/gallery/' . $image;
                $this->gallery->image = $imagePath ?? $this->gallery->image;
            }

            $this->gallery->caption = $this->caption;
            $this->gallery->content = $this->content;
            $this->gallery->save();

            $this->successToast('Gallery updated successfully!');
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while updating the gallery: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-blog-gallery-component');
    }
}

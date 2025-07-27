<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use Livewire\Attributes\Validate;
use App\Models\Tag;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminEditTagComponent extends Component
{
    use ToastTrait;
    use WithFileUploads;
    public string $name;
    public string $oldSlug;
    public $oldImage;
    public $newImage;

    public $catSlug;
    public $cat;
    public function mount($slug){
        $this->catSlug = $slug;
        $this->cat = Tag::where('slug',$this->catSlug)->first();
        $this->name = $this->cat->name;
        $this->oldSlug = $this->cat->slug;
        $this->oldImage = $this->cat->image;
    }

    public function genSlug(){
        $this->oldSlug = Str::slug($this->name,'-');
    }
    public function updateCat(){
        $this->validate([
            'name'=>'required',
            'oldSlug'=>'required|unique:tags,slug,'.$this->cat->id,
            'newImage'=>'nullable|mimes:jpg,png,jpeg'
        ]);
        try{
            if($this->newImage){
                $cat = Carbon::now()->timestamp.'.'.$this->newImage->extension();
                $this->newImage->storeAs('assets/tags',$cat);
                $catPath = 'assets/tags/'.$cat;
            }
            $this->cat->update([
                'name'=>$this->name,
                'slug'=>$this->oldSlug,
                'image'=> $this->newImage ? $catPath : $this->oldImage,
                'is_active'=>1
            ]);
            $this->successToast("Updated Created.");
        }catch(\Exception $e){
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-tag-component',get_defined_vars());
    }
}

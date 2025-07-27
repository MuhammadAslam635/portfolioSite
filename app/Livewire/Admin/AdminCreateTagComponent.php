<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use Livewire\Attributes\Validate;
use App\Models\Tag;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AdminCreateTagComponent extends Component
{
    use ToastTrait;
    use WithFileUploads;
    #[Validate('required')]
    public string $name="Test";
    #[Validate('required|unique:tags,slug')]
    public string $slug="test";
    #[Validate('required|mimes:jpg,png,avif,jpeg')]
    public $image;

    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function createTag(){
        $this->validate();
        try{
            if($this->image){
                $cat = Carbon::now()->timestamp.'.'.$this->image->extension();
                $this->image->storeAs('assets/tags',$cat);
                $catPath = 'assets/tags/'.$cat;
            }
            Tag::create([
                'name'=>$this->name,
                'slug'=>$this->slug,
                'image'=>$catPath ?? '',
                'is_active'=>1
            ]);
            $this->successToast("Category Created.");
        }catch(\Exception $e){
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-create-tag-component',get_defined_vars());
    }
}

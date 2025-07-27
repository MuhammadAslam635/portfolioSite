<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use Livewire\Attributes\Validate;
use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AdminCreateCategoryComponent extends Component
{
    use ToastTrait;
    use WithFileUploads;
    #[Validate('required')]
    public string $name="Test";
    #[Validate('required|unique:categories,slug')]
    public string $slug="test";
    #[Validate('required|mimes:jpg,png,avif,jpeg')]
    public $image;

    public function genSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function createCat(){
        $this->validate();
        try{
            if($this->image){
                $cat = Carbon::now()->timestamp.'.'.$this->image->extension();
                $this->image->storeAs('assets/categories',$cat);
                $catPath = 'assets/categories/'.$cat;
            }
            Category::create([
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
        
        return view('livewire.admin.admin-create-category-component',get_defined_vars());
    }
}

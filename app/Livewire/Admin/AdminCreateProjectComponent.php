<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use Illuminate\Support\Str;
use Carbon\carbon;
use App\Models\Project;
class AdminCreateProjectComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $name="New Project";
    public $slug="new-project";
    public $image;
    public $loom_link;
    public $link;
    public $is_active= 1;
    public $is_featured= 1;
    public $category_id;
    public $reading_time=5;
    public $published_at;
    public function genSlug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function createProject(){
        $this->validate([
            'category_id'=>'required|exists:categories,id',
            'name'=>'required|string',
            'slug'=>'required|unique:projects,slug',
            'image'=>'required|mimes:jpg,png,jpeg',
            'link'=>'nullable|url',
            'loom_link'=>'nullable|url',

        ]);
        try{
            if($this->image){
                $image='';
                $image = Carbon::now()->timestamp.'.'.$this->image->extension();
                $this->image->storeAs("assets/projects",$image);
                
                
            }
            Project::create([
                'category_id'=>$this->category_id,
                'name'=>$this->name,
                'slug'=>$this->slug,
                'image'=>$image,
                'loom_link'=>$this->loom_link,
                'link'=>$this->link,
                'is_active'=>$this->is_active,
                'is_featured'=>$this->is_featured,
                'reading_time'=>$this->reading_time,
                'published_at'=>$this->published_at
            ]);
            $this->successToast('Project Added Successfully.');
            $this->reset();
        }catch(\Exception $e){
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $cats = Category::get();
        return view('livewire.admin.admin-create-project-component',get_defined_vars());
    }
}

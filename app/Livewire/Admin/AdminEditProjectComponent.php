<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use Illuminate\Support\Str;
use Carbon\carbon;
use App\Models\Project;

class AdminEditProjectComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $name;
    public $slug;
    public $image;
    public $loom_link;
    public $link;
    public $is_active= 1;
    public $is_featured= 1;
    public $category_id;
    public $reading_time=5;
    public $published_at;
    public $project;
    public $projectSlug;
    public $newImage;
    public function mount($slug){
        $this->projectSlug = $slug;
        $this->project = Project::where('slug', $slug)->first();
        if ($this->project) {
            $this->name = $this->project->name;
            $this->slug = $this->project->slug;
            $this->image = $this->project->image;
            $this->loom_link = $this->project->loom_link;
            $this->link = $this->project->link;
            $this->is_active = $this->project->is_active;
            $this->is_featured = $this->project->is_featured;
            $this->category_id = $this->project->category_id;
            $this->reading_time = $this->project->reading_time;
            $this->published_at = $this->project->published_at;
        }
    }
    public function genSlug(){
    $this->slug = Str::slug($this->name, '-');
}

public function updateProject(){
    $this->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string',
        'slug' => 'required|unique:projects,slug,' . $this->project->id,
        'newImage' => 'nullable|mimes:jpg,png,jpeg',
        'link' => 'nullable|url',
        'loom_link' => 'nullable|url',
    ]);
    
    try{
        $updateData = [
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'loom_link' => $this->loom_link,
            'link' => $this->link,
            'is_active' => $this->is_active,
            'is_featured' => $this->is_featured,
            'reading_time' => $this->reading_time,
            'published_at' => $this->published_at
        ];

        // Handle image upload
        if($this->newImage){
            $image = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs("assets/projects", $image);
            $updateData['image'] = $image;
        }
        // If no new image, keep the existing one (don't update image field)

        // Update the existing project instead of creating new one
        $this->project->update($updateData);
        
        $this->successToast('Project Updated Successfully.');
        
    } catch(\Exception $e){
        $this->errorToast($e->getMessage());
    }
}
    public function render()
    {
        $cats = Category::get();
        return view('livewire.admin.admin-edit-project-component',get_defined_vars());
    }
}

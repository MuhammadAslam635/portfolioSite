<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Skill;
use Illuminate\Support\Str;
use App\Traits\ToastTrait;
use Carbon\Carbon;
class AdminCreateSkillComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $name;
    public $slug;
    public $image;
    public $sType = 0; // Default type
    public $score =90;

    public function genSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }
    public function createSkill(){
        $this->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:skills,slug',
                'sType' => 'required|integer|in:0,1,2,3', // Ensure valid type
                'image' => 'nullable|image|max:1024', // 1MB Max
                'score' => 'nullable|integer|min:0|max:100', // Optional score
            ]);
        try{


            $skill = new Skill();
            $skill->name = $this->name;
            $skill->slug = $this->slug;
            $skill->sType = $this->sType;
            $skill->score = $this->score;

            if($this->image){
                $image = Carbon::now()->timestamp . '_' . $this->image->getClientOriginalName();
                $this->image->storeAs('assets/skills', $image);
                $skill->image = $image;
            }

            $skill->save();

            $this->reset();
            $this->successToast('Skill created successfully!');
        }catch(\Exception $e){
            $this->errorToast('Error creating skill: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-create-skill-component');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Skill;
use Illuminate\Support\Str;
use App\Traits\ToastTrait;
use Carbon\Carbon;
class AdminEditSkillComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
    public $skillSlug;
    public $name;
    public $slug;
    public $image;
    public $newImage;
    public $sType; // Default type
    public $score;
    public $is_active;
    public $skill;

    public function mount($slug)
    {
        $this->skillSlug = $slug;
        $this->skill = Skill::where('slug', $this->skillSlug)->firstOrFail();
        $this->name = $this->skill->name;
        $this->slug = $this->skill->slug;
        $this->sType = $this->skill->sType;
        $this->score = $this->skill->score;
        $this->image = $this->skill->image;
        $this->is_active = $this->skill->is_active;
    }
    public function genSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function updateSkill()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:skills,slug,' . $this->skill->id,
            'sType' => 'required|integer|in:0,1,2,3', // Ensure valid type
            'newImage' => 'nullable|image|max:1024', // 1MB Max
            'score' => 'nullable|integer|min:0|max:100', // Optional score
        ]);

        try {
            $this->skill->name = $this->name;
            $this->skill->slug = $this->slug;
            $this->skill->sType = $this->sType;
            $this->skill->score = $this->score;

            if ($this->newImage) {
                $image = Carbon::now()->timestamp . '_' . $this->newImage->getClientOriginalName();
                $this->newImage->storeAs('assets/skills', $image);
                $this->skill->image = $image;
            }

            $this->skill->save();

            $this->successToast('Skill updated successfully!');
        } catch (\Exception $e) {
            $this->errorToast('Error updating skill: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-skill-component');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Skill;
use App\Traits\ToastTrait;

class AllSkillsComponent extends Component
{
    use ToastTrait;
    use WithPagination;
    public $search = '';
    public $latest = 'all';
    public $status = 'all';
    public $type = 'all';

    public function deleteSkill($skillId)
    {
        $skill = Skill::find($skillId);
        if ($skill) {
            $skill->delete();
            $this->successToast('Skill deleted successfully.');
        } else {
            $this->errorToast('Skill not found.');
        }
    }
    public function render()
    {
        $query = Skill::where('name', 'like', '%' . $this->search . '%');
        if ($this->latest !== 'all') {
            $query->orderBy('created_at', $this->latest);
        }
        if ($this->status !== 'all') {
            $query->where('is_active', $this->status === 'active');
        }
        if ($this->type !== 'all') {
            $query->where('sType', $this->type);
        }
        $skills= $query->paginate(10);
        $totalSkills = Skill::count();
        return view('livewire.admin.all-skills-component',get_defined_vars());
    }
}

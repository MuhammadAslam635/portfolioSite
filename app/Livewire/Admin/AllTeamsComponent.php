<?php

namespace App\Livewire\Admin;

use App\Models\Team;
use App\Models\Project;
use App\Models\Skill;
use App\Traits\ToastTrait;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AllTeamsComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    use ToastTrait;

    #[Layout('components.layouts.app')]
    public $showConfirmModal = false;
    public $totalTeams;
    public $activeTeams;
    public $inactiveTeams;
    public $search;
    public $status = 'all';
    public $designation = 'all';
    public $latest = 'latest';
    public $selectedTeamId;
    public $selectedTeam;
    public $teamSkill;
    public $teamSkillScore =60;

    // Project assignment properties
    public $projectId;
    public $role;

    public function mount()
    {
        $this->totalTeams = Team::count();
        $this->activeTeams = Team::where('is_active', 1)->count();
        $this->inactiveTeams = Team::where('is_active', 0)->count();
    }

    public function openModal($id)
    {
        $this->selectedTeamId = $id;
        $this->selectedTeam = Team::find($id);

        if (!$this->selectedTeam) {
            $this->errorToast("Team member not found.");
            return;
        }

        $this->showConfirmModal = true;
    }


    public function addProject()
    {
        try {
            $this->validate([
                'selectedTeamId' => 'required|exists:teams,id',
                'projectId' => 'required|exists:projects,id',
                'role' => 'required|string|max:255',
            ]);

            $team = Team::find($this->selectedTeamId);
            $project = Project::find($this->projectId);

            if (!$team || !$project) {
                $this->errorToast("Team member or project not found.");
                return;
            }

            // Check if already assigned
            if ($team->projects()->where('project_id', $this->projectId)->exists()) {
                $this->warningToast("Team member is already assigned to this project.");
                return;
            }

            $team->projects()->attach($this->projectId, [
                'role' => $this->role,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $this->successToast("Team member assigned to project successfully.");
            $this->showConfirmModal = false;
            $this->reset(['selectedTeamId', 'projectId', 'role']);

        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }
    public function addSkill()
    {
        try {
            $this->validate([
                'selectedTeamId' => 'required|exists:teams,id',
                'teamSkill' => 'required|exists:skills,id',
                'teamSkillScore' => 'required|numeric:min:40|max:100',
            ]);

            $team = Team::find($this->selectedTeamId);
            $project = Skill::find($this->teamSkill);

            if (!$team || !$project) {
                $this->errorToast("Team member or skill not found.");
                return;
            }

            // Check if already assigned
            if ($team->skills()->where('skill_id', $this->teamSkill)->exists()) {
                $this->warningToast("Team member is already assigned to this skill.");
                return;
            }

            $team->skills()->attach($this->teamSkill, [
                'score' => $this->teamSkillScore,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $this->successToast("Team member assigned to skill successfully.");
            $this->showConfirmModal = false;
            $this->reset(['selectedTeamId', 'projectId', 'teamSkillScore', 'teamSkill']);

        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }

    public function toggleStatus($teamId)
    {
        try {
            $team = Team::find($teamId);
            if ($team) {
                $team->update(['is_active' => !$team->is_active]);
                $status = $team->is_active ? 'activated' : 'deactivated';
                $this->successToast("Team member {$status} successfully.");

                // Update counts
                $this->activeTeams = Team::where('is_active', 1)->count();
                $this->inactiveTeams = Team::where('is_active', 0)->count();
            }
        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }

    public function render()
    {
        $query = Team::where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('designation', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');

        if ($this->status != 'all') {
            $query->where('is_active', $this->status);
        }

        if ($this->designation != 'all') {
            $query->where('designation', 'like', '%' . $this->designation . '%');
        }

        if ($this->latest == 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($this->latest == 'oldest') {
            $query->orderBy('created_at', 'asc');
        } elseif ($this->latest == 'name') {
            $query->orderBy('name', 'asc');
        }

        $teams = $query->paginate(12);
        $skills = Skill::get();
        $projects = Project::where('is_active', 1)->get();
        $designations = Team::select('designation')
                           ->distinct()
                           ->whereNotNull('designation')
                           ->pluck('designation');

        return view('livewire.admin.all-teams-component', get_defined_vars());
    }
}

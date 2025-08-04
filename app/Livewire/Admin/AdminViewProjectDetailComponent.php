<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Project;
use App\Models\ProjectTag;
use App\Models\ProjectTeam;
use App\Traits\ToastTrait;

class AdminViewProjectDetailComponent extends Component
{
    use ToastTrait;
    
    public $project;
    public $showConfirmModal = false;
    public $showdrawer = false;
    
    // Separate variables for tags and teams
    public $projectTagId;
    public $projectTeamId;
    public $editingType = ''; // 'tag' or 'team'
    
    // Form fields
    public $tagId;
    public $teamId;
    public $role;
    public $teamRole;

    public function mount($slug)
    {
        $this->project = Project::with(['tags', 'projectTeams.team', 'projectGalleries', 'category'])
            ->where('slug', $slug)
            ->first();
            
        if (!$this->project) {
            $this->errorToast('Project not found.');
            return redirect()->route('projects');
        }
    }

    public function openModal($id, $type = 'tag')
    {
        $this->editingType = $type;
        
        if ($type === 'tag') {
            $this->projectTagId = $id;
            // Pre-fill current tag
            $projectTag = ProjectTag::find($id);
            $this->tagId = $projectTag ? $projectTag->tag_id : null;
        } else {
            $this->projectTeamId = $id;
            // Pre-fill current team and role
            $projectTeam = ProjectTeam::find($id);
            if ($projectTeam) {
                $this->teamId = $projectTeam->team_id;
                $this->teamRole = $projectTeam->role;
            }
        }
        
        $this->showConfirmModal = true;
    }

    public function openDrawer()
    {
        $this->reset(['tagId', 'teamId', 'role']);
        $this->showdrawer = true;
    }

    public function editTag()
    {
        $this->validate([
            'tagId' => 'required|exists:tags,id',
        ]);

        try {
            $projectTag = ProjectTag::find($this->projectTagId);
            if (!$projectTag) {
                $this->errorToast('Project tag not found.');
                return;
            }

            // Check if this tag is already assigned to avoid duplicates
            $exists = ProjectTag::where('project_id', $this->project->id)
                ->where('tag_id', $this->tagId)
                ->where('id', '!=', $this->projectTagId)
                ->exists();

            if ($exists) {
                $this->errorToast('This tag is already assigned to the project.');
                return;
            }

            $projectTag->update(['tag_id' => $this->tagId]);
            
            $this->showConfirmModal = false;
            $this->successToast('Tag updated successfully.');
            $this->resetModalFields();
            
            // Refresh project data
            $this->project->refresh();
            
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while updating the tag: ' . $e->getMessage());
            $this->showConfirmModal = false;
            $this->resetModalFields();
        }
    }

    public function editTeam()
    {
        $this->validate([
            'teamId' => 'required|exists:teams,id',
            'teamRole' => 'required|string|max:255',
        ]);

        try {
            $projectTeam = ProjectTeam::find($this->projectTeamId);
            if (!$projectTeam) {
                $this->errorToast('Project team not found.');
                return;
            }

            // Check if this team is already assigned to avoid duplicates
            $exists = ProjectTeam::where('project_id', $this->project->id)
                ->where('team_id', $this->teamId)
                ->where('id', '!=', $this->projectTeamId)
                ->exists();

            if ($exists) {
                $this->errorToast('This team member is already assigned to the project.');
                return;
            }

            $projectTeam->update([
                'team_id' => $this->teamId,
                'role' => $this->teamRole
            ]);

            $this->showConfirmModal = false;
            $this->successToast('Team updated successfully.');
            $this->resetModalFields();
            
            // Refresh project data
            $this->project->refresh();
            
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while updating the team: ' . $e->getMessage());
            $this->showConfirmModal = false;
            $this->resetModalFields();
        }
    }

    public function createTag()
    {
        $this->validate([
            'tagId' => 'required|exists:tags,id',
        ]);

        try {
            // Check if tag is already assigned
            $exists = ProjectTag::where('project_id', $this->project->id)
                ->where('tag_id', $this->tagId)
                ->exists();

            if ($exists) {
                $this->errorToast('This tag is already assigned to the project.');
                return;
            }

            ProjectTag::create([
                'project_id' => $this->project->id,
                'tag_id' => $this->tagId,
            ]);

            $this->showdrawer = false;
            $this->successToast('Tag added successfully.');
            $this->resetModalFields();
            
            // Refresh project data
            $this->project->refresh();
            
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while adding the tag: ' . $e->getMessage());
            $this->showdrawer = false;
            $this->resetModalFields();
        }
    }

    public function createTeam()
    {
        $this->validate([
            'teamId' => 'required|exists:teams,id',
            'role' => 'required|string|max:255',
        ]);

        try {
            // Check if team member is already assigned
            $exists = ProjectTeam::where('project_id', $this->project->id)
                ->where('team_id', $this->teamId)
                ->exists();

            if ($exists) {
                $this->errorToast('This team member is already assigned to the project.');
                return;
            }

            ProjectTeam::create([
                'project_id' => $this->project->id,
                'team_id' => $this->teamId,
                'role' => $this->role
            ]);

            $this->showdrawer = false;
            $this->successToast('Team member added successfully.');
            $this->resetModalFields();
            
            // Refresh project data
            $this->project->refresh();
            
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while adding the team member: ' . $e->getMessage());
            $this->showdrawer = false;
            $this->resetModalFields();
        }
    }

    public function deleteTag($projectTagId)
    {
        try {
            $projectTag = ProjectTag::find($projectTagId);
            if ($projectTag) {
                $projectTag->delete();
                $this->successToast('Tag removed successfully.');
                $this->project->refresh();
            } else {
                $this->errorToast('Tag not found.');
            }
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while removing the tag: ' . $e->getMessage());
        }
    }

    public function deleteTeam($projectTeamId)
    {
        try {
            $projectTeam = ProjectTeam::find($projectTeamId);
            if ($projectTeam) {
                $projectTeam->delete();
                $this->successToast('Team member removed successfully.');
                $this->project->refresh();
            } else {
                $this->errorToast('Team member not found.');
            }
        } catch (\Exception $e) {
            $this->errorToast('An error occurred while removing the team member: ' . $e->getMessage());
        }
    }

    private function resetModalFields()
    {
        $this->reset([
            'projectTagId', 
            'projectTeamId', 
            'tagId', 
            'teamId', 
            'role', 
            'teamRole',
            'editingType'
        ]);
    }

    public function render()
    {
        $tags = Tag::orderBy('name')->get();
        $teams = Team::orderBy('name')->get();
        
        return view('livewire.admin.admin-view-project-detail-component', compact('tags', 'teams'));
    }
}
<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\enums\StatusEnum;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;
use App\Models\Skill;
use App\Models\Project;
use Carbon\Carbon;
use App\Models\ProjectGallery;

class AllProjectsComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    use ToastTrait;
    #[Layout('components.layouts.app')]
    public $showConfirmModal = false;
    public $totalProjects;
    public $publishedProjects;
    public $draftedProjects;
    public $pendingProjects;
    public $archivedProjects;
    public $search;
    public $category = "all";
    public $status = 'all';
    // public $skills = 'all';
    public $featured = 'all';
    public $latest = 'all';
    public $selectedProjectId;
    public $selectedProject;
    public $projectImage;
    public $caption;
    public $content;
     public function mount()
    {
        $this->totalProjects     = Project::count();
        $this->publishedProjects = Project::where('is_published', StatusEnum::ACTIVE->value)->count();
        $this->pendingProjects   = Project::where('is_published', StatusEnum::INACTIVE->value)->count();
        $this->draftedProjects   = Project::where('is_published', StatusEnum::DRAFT->value)->count();
        $this->archivedProjects  = Project::where('is_published', StatusEnum::ARCHIVED->value)->count();
    }
    public function openProjectModal($id){
        $this->selectedProjectId = $id;
        $this->selectedProject   = Project::find($id);
        if (! $this->selectedProject) {
            $this->errorToast("Project not found.");
            return;
        }
        $this->showConfirmModal = true;
    }
    public function addProjectContent()
    {
        $this->validate([
            'selectedProjectId' => 'required|exists:projects,id',
            'content' => 'required|string',
            'projectImage' => 'nullable|mimes:jpg,png,jpeg',
            'caption' => 'nullable|string|max:255',
        ]);
        try {
            if($this->projectImage){
                $image = Carbon::now()->timestamp.'.'.$this->projectImage->extension();
                $this->projectImage->storeAs("assets/projects/gallery/",$image);
            } else {
                $image = 'default.jpg';
            }
            ProjectGallery::create([
                'project_id' => $this->selectedProjectId,
                'image' => $image,
                'caption' => $this->caption,
                'content' => $this->content,
                'is_active' => 1,
                'is_featured' => 0,
                'order' => 0,
            ]);
            $this->showConfirmModal = false;
            $this->reset(['selectedProjectId', 'content', 'image', 'caption']);
            $this->successToast('Content added successfully.');
            $this->reset();
        } catch (\Exception $e) {
            $this->errorToast('Failed to add content: ' . $e->getMessage());
        }
    }
    public function render()
    {
        $query = Project::where('name', 'like', '%' . $this->search . '%');
        if ($this->status != 'all') {
            $query->where('is_published', $this->status);
        }
        if ($this->category != 'all') {
            $query->where('category_id', $this->status);
        }
        if ($this->featured != 'all') {
            $query->where('is_featured', $this->status);
        }
        if ($this->latest == 'latest') {
            $query->where('created_at', 'desc');
        }
        if ($this->latest == 'oldest') {
            $query->where('created_at', 'asc');
        }
        $projects      = $query->paginate(10);
        $skills = Skill::get();
        return view('livewire.admin.all-projects-component',get_defined_vars());
    }
}

<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;

class ProjectDetailComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public $project;
    public $relatedProjects;
    public $projectSlug;

    public function mount($slug)
    {
        $this->projectSlug = $slug;
        $this->project = \App\Models\Project::where('slug', $slug)->firstOrFail();
        $this->project->update([
            'views' => $this->project->views + 1,
        ]);
        $this->relatedProjects = \App\Models\Project::where('category_id', $this->project->category_id)
            ->where('id', '!=', $this->project->id)
            ->latest()
            ->take(3)
            ->get();
    }
    public function render()
    {
        return view('livewire.web.project-detail-component');
    }
}

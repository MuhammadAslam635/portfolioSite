<?php

namespace App\Livewire\Web\Projects;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\Project;
use App\Models\Skill;
class ProjectComponent extends Component
{
    use WithPagination;
    #[Layout('components.layouts.base.base')]
    public $category = 'all';
    public function render()
    {
        $featuredProjects = \App\Models\Project::where('is_featured', 1)->inRandomOrder()->take(1)->get();
        $query = \App\Models\Project::latest()->with('category', 'tags');
        if ($this->category !== 'all') {
            $query = $query->where('category_id', $this->category);
        }
        $projects = $query->paginate(6);
        $skills = Skill::all();
        $cats = \App\Models\Category::all();
        return view('livewire.web.projects.project-component',get_defined_vars());
    }
}

<?php

namespace App\Livewire\Web\Projects;

use Livewire\Component;
use Livewire\Attributes\Layout;
class ProjectComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public function render()
    {
        return view('livewire.web.projects.project-component');
    }
}

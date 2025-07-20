<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;
class TeamComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public function render()
    {
        return view('livewire.web.team-component');
    }
}

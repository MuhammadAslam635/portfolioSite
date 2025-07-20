<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;

class AboutComponent extends Component
{
    #[Layout('components.layouts.base.base')]
    public function render()
    {
        return view('livewire.web.about-component');
    }
}

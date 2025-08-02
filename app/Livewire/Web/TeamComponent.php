<?php

namespace App\Livewire\Web;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\Team;
class TeamComponent extends Component
{
    use WithPagination;
    #[Layout('components.layouts.base.base')]
    public function render()
    {
        $leader = Team::where('name', "Muhammad Aslam")->first();
        // dd($leader);
        $teams = Team::where('id','!=',$leader->id)->paginate(10);
        return view('livewire.web.team-component',get_defined_vars());
    }
}

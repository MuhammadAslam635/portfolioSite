<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Team;
use App\Traits\ToastTrait;
use Livewire\Attributes\Layout;
class TeamDetailComponent extends Component
{
    use ToastTrait;
    #[Layout('components.layouts.base.base')]
    public $team;
    public $teamSlug;
    public function mount($slug)
    {
        $this->teamSlug = $slug;
        $this->team = Team::where('slug', $slug)->first();

        if (!$this->team) {
            abort(404, 'Team not found');
        }
    }
    public function render()
    {
        return view('livewire.web.team-detail-component');
    }
}

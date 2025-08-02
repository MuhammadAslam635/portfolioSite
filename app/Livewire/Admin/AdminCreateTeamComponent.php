<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Traits\ToastTrait;

class AdminCreateTeamComponent extends Component
{
    use ToastTrait;
    use WithFileUploads;

    #[\Livewire\Attributes\Validate('required')]
    public string $name = "Test Team Member";

    #[\Livewire\Attributes\Validate('required|unique:teams,slug')]
    public string $slug = "test-team-member";

    #[\Livewire\Attributes\Validate('required|mimes:jpg,png,jpeg')]
    public $image;

    #[\Livewire\Attributes\Validate('required')]
    public string $designation = "";

    public $content = "";
    public $is_active = 1;
    public $facebook = "";
    public $twitter = "";
    public $linkedin = "";
    public $instagram = "";
    public $youtube = "";
    public $whatsapp = "";
    public $github = "";
    public $phone = "";
    public $email = "";
    public $dType = 0;
    public $bio = "";

    public function genSlug()
    {
        $this->slug = \Illuminate\Support\Str::slug($this->name, '-');
    }

    public function createTeam()
    {
        $this->validate();
        try {


            if ($this->image) {
                $teamImage = \Carbon\Carbon::now()->timestamp . '.' . $this->image->extension();
                $this->image->storeAs('assets/teams', $teamImage);
                $teamImagePath = $teamImage;
            }

            \App\Models\Team::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $teamImagePath ?? 'default.jpg',
                'designation' => $this->designation,
                'content' => $this->content,
                'is_active' => $this->is_active,
                'dType' => $this->dType,
                'facebook' => $this->facebook,
                'twitter' => $this->twitter,
                'linkedin' => $this->linkedin,
                'instagram' => $this->instagram,
                'youtube' => $this->youtube,
                'whatsapp' => $this->whatsapp,
                'github' => $this->github,
                'phone' => $this->phone,
                'email' => $this->email,
                'bio' => $this->bio,
            ]);

            $this->successToast("Team Member Created Successfully.");

            // Reset form
            $this->reset();
            $this->is_active = 1;

        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-create-team-component');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Team;
use App\Traits\ToastTrait;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;


class AdminEditTeamComponent extends Component
{
    use WithFileUploads;
    use ToastTrait;
 #[Layout('components.layouts.app')]
    public $team;
    public $name;
    public $slug;
    public $designation;
    public $content;
    public $is_active;
    public $facebook;
    public $twitter;
    public $linkedin;
    public $instagram;
    public $youtube;
    public $whatsapp;
    public $github;
    public $phone;
    public $email;
    public $image;
    public $newImage;
    public $teamSlug;

    public function mount($slug)
    {
        $this->teamSlug = $slug;
        $this->team = Team::where('slug', $this->teamSlug)->first();
        
        if ($this->team) {
            $this->name = $this->team->name;
            $this->slug = $this->team->slug;
            $this->designation = $this->team->designation;
            $this->content = $this->team->content;
            $this->is_active = $this->team->is_active;
            $this->facebook = $this->team->facebook;
            $this->twitter = $this->team->twitter;
            $this->linkedin = $this->team->linkedin;
            $this->instagram = $this->team->instagram;
            $this->youtube = $this->team->youtube;
            $this->whatsapp = $this->team->whatsapp;
            $this->github = $this->team->github;
            $this->phone = $this->team->phone;
            $this->email = $this->team->email;
            $this->image = $this->team->image;
        }
    }

    public function genSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateTeam()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:teams,slug,' . $this->team->id,
            'designation' => 'required',
            'newImage' => 'nullable|mimes:jpg,png,jpeg',
            'is_active' => 'required',
            'email' => 'nullable|email',
        ]);

        try {
            if ($this->newImage) {
                $teamImage = \Carbon\Carbon::now()->timestamp . '.' . $this->newImage->extension();
                $this->newImage->storeAs('assets/teams', $teamImage);
                $teamImagePath = $teamImage;
            } else {
                $teamImagePath = $this->image;
            }

            $this->team->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'designation' => $this->designation,
                'content' => $this->content,
                'is_active' => $this->is_active,
                'facebook' => $this->facebook,
                'twitter' => $this->twitter,
                'linkedin' => $this->linkedin,
                'instagram' => $this->instagram,
                'youtube' => $this->youtube,
                'whatsapp' => $this->whatsapp,
                'github' => $this->github,
                'phone' => $this->phone,
                'email' => $this->email,
                'image' => $teamImagePath,
            ]);

            $this->successToast("Team Member Updated Successfully.");
            
        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-team-component');
    }
}
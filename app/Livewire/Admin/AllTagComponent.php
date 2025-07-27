<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag;
use Livewire\WithPagination;
use App\Traits\ToastTrait;

class AllTagComponent extends Component
{
    use WithPagination;
    use ToastTrait;
    public $totalTags;
    public $search;
    public $status = 'all';
    public $latest = 'all';
    public function mount()
    {
        $this->totalTags = Tag::count();
    }
    public function deleteTag($id)
    {
        try {
            $tag = Tag::find($id);
            if (!$tag) {
                $this->warnningToast("Tag not found.");
                return;
            }
            $tag->delete();
            $this->successToast('Tag Deleted.');
        } catch (\Exception $e) {
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $query = Tag::where('name', 'like', '%' . $this->search . '%');
        if ($this->status !== 'all') {
            $query->where('status', $this->status);
        }
        if ($this->latest === 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($this->latest === 'oldest') {
            $query->orderBy('created_at', 'asc');
        }
        $tags = $query->paginate(12);
        return view('livewire.admin.all-tag-component',get_defined_vars());
    }
}

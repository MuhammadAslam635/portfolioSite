<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use App\Traits\ToastTrait;
class AllCategoriesComponent extends Component
{
    use ToastTrait;
    use WithPagination;
    public $totalCats;
    public $search;
    public $status = 'all';
    public $latest = 'all';
    public function mount(){
        $this->totalCats = Category::count();
    }
    public function deleteCat($id){
        //dd("Hello");
        try{
           $cat= Category::find($id);
           if(!$cat){
            $this->warnningToast("Category not found.");
           }
           $cat->delete();
           $this->successToast('Category Deleted.');
        }catch(\Exception $e){
            $this->errorToast($e->getMessage());
        }
    }
    public function render()
    {
        $query = Category::where('name', 'like', '%' . $this->search . '%');
        if($this->status !== 'all') {
            $query->where('status', $this->status);
        }
        if($this->latest === 'latest') {
            $query->orderBy('created_at', 'desc');
        } elseif($this->latest === 'oldest') {
            $query->orderBy('created_at', 'asc');
        }
        $cats = $query->paginate(12);
        return view('livewire.admin.all-categories-component',get_defined_vars());
    }
}

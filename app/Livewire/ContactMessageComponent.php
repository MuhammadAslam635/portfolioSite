<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use App\Traits\ToastTrait;
class ContactMessageComponent extends Component
{
    use ToastTrait;
    public string $name;
    public string $email;
    public string $phone;
    public string $message;
    public string $subject;

    public function submitForm(){
        try{
            $this->validate([
                'message'=>'required',
                'email'=>'required|email',
                'subject'=>'required'
            ]);
            ContactUs::create($this->all());
            $this->successToast("Message Successfully Send.");
            $this->reset();
        }catch(\Exception $e){
            \Log::error("Contact Message Error:",[$e->getMessage()]);
            return ;
        }
    }
    public function render()
    {
        return view('livewire.contact-message-component');
    }
}

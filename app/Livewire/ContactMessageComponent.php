<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use App\Traits\ToastTrait;
use Livewire\Attributes\Validate;
class ContactMessageComponent extends Component
{
    use ToastTrait;
    
    public string $name;
    #[Validate('required|email')]
    public string $email;
    public string $phone;
    #[Validate('required')]
    public string $message;
    #[Validate('required')]
    public string $subject;

    public function submitForm(){
        // dd("HEllo");
        $this->validate();
        try{
            
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

<?php

namespace App\Http\Livewire\Front\Contactus;
use Livewire\Component;

use App\Models\ContactUs;

class ContactUsForm extends Component
{
    public $name;
    public $phone;
    public $email;
    public $title;
    public $message;
    public $successMessage;
    public $errorMessage;

    
    protected $rules = [
        'phone' => 'required',
        'email' => 'required|email',
        'title' => 'required',
        'message' => 'required',
        'name' => 'nullable',
    ];

    public function submit()
    {
        $this->validate();

            try {
                $contactUs = new ContactUs();
                $contactUs->name = $this->name;
                $contactUs->phone = $this->phone;
                $contactUs->email = $this->email;
                $contactUs->title = $this->title;
                $contactUs->message = $this->message;
                $contactUs->save();    
                
                $this->successMessage = 'Form submitted successfully!';
                $this->resetForm();
            } catch (\Exception $e) {
                $this->errorMessage = 'An error occurred while submitting the form.';
            }     
    
    }

    private function resetForm()
{
    $this->name = '';
    $this->phone = '';
    $this->email = '';
    $this->title = '';
    $this->message = '';
    
    $this->errorMessage = null;
    $this->successMessage = null;
}
    
    public function render()
    {
        return view('livewire.front.contactus.contact-us-form');
    }
}

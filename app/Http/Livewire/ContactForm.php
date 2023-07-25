<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5',
    ];

    public function submitForm()
    {
        $validatedData = $this->validate();

        // Process the form data and perform any necessary actions (e.g., sending emails).

        // After successful form submission, you can reset the form fields:
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}

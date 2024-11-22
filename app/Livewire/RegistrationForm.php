<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistrationForm extends Component
{
    public $step = 1;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $success = '';

    protected $rules = [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'password_confirmation' => 'same:password',
    ];

    public function submitForm()
    {
        // $this->validate();
        // dd('submitted');
        $user = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->success = 'Succès'; 
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->step = 2;

        return view('livewire.registration-form', compact('user'));
    }
    public function render()
    {
        return view('livewire.registration-form');
    }
}

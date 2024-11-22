<?php

namespace App\Livewire\Setup;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SecondStep extends Component
{
    public $step = 2;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;


    public static function save($username, $email, $password)
    {
        self::$username = $username;
        self::$email = $email;
        self::$password = $password;

        $user = User::create([
            'name' => self::$username,
            'email' => self::$email,
            'password' => Hash::make(self::$password),
        ]);
        dd($user);
    }
    public function render()
    {
        return view('livewire.setup.second-step');
    }
}

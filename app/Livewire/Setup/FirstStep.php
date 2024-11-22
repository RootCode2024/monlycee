<?php

namespace App\Livewire\Setup;

use Livewire\Component;

class FirstStep extends Component
{
    public $step = 1;
    public function render()
    {
        return view('livewire.setup.first-step');
    }
}

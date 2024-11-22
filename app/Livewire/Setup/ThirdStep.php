<?php

namespace App\Livewire\Setup;

use Livewire\Component;

class ThirdStep extends Component
{

    public $logo;
    public function render()
    {
        return view('livewire.setup.third-step');
    }
}

<?php

namespace App\Livewire\Component;

use Livewire\Component;

class CountUp extends Component
{
    
    public $value = 0;
    public $prefix = '';

    public function render()
    {
        return view('livewire.component.count-up');
    }
}

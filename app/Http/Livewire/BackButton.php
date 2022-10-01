<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BackButton extends Component
{

    public $href;

    public $title;

    public function render()
    {
        return view('livewire.back-button');
    }
}

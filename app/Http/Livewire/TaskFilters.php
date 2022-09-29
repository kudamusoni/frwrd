<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskFilters extends Component
{
    public $showCompleted = true;

    public function render()
    {
        return view('livewire.task-filters');
    }

    public function toggleVisibility()
    {
        $this->emit('taskListVisibility', json_encode($this->showCompleted));
    }
}

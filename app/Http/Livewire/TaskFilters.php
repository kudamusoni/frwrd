<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskFilters extends Component
{
    public $showCompleted = true;

    public $orderBy;

    public function render()
    {
        $this->updatedOrderBy();
        return view('livewire.task-filters');
    }

    public function toggleVisibility()
    {
        $this->emit('taskListVisibility', ['completed' => json_encode($this->showCompleted), 'orderBy' => $this->orderBy]);
    }

    public function updatedOrderBy()
    {
        $this->emit('orderByChange', ['completed' => json_encode($this->showCompleted), 'orderBy' => $this->orderBy]);
    }
}

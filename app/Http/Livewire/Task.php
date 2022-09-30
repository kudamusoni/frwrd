<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Component;

class Task extends Component
{

    use HasFactory;

    public $task;

    public $completed;

    public $show = true;

    public $button = 'Complete';

    public function mount()
    {
        $this->updateButton();
    }

    public function updateButton()
    {
        $this->button = $this->task->completed === 'true' ? 'Completed' : 'Complete';
    }

    public function complete()
    {
        $this->task->update(['completed' => 'true', 'completed_at' => Carbon::now()]);
        $this->updateButton();
        $this->emit('taskUpdated');
    }

    public function delete()
    {
        $this->task->delete();
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.task');
    }
}

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

    public $priorityImage;

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

    public function setPriorityImage()
    {
        if ($this->task->priority === 'Low') {
            return $this->priorityImage = '
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
            </svg>';
        }

        if ($this->task->priority === 'Medium') {
            return $this->priorityImage = '
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
            ';
        }

        // High
        return $this->priorityImage = '
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
            </svg>
            ';

    }

    public function render()
    {
        return view('livewire.task');
    }
}

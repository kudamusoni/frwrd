<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskList extends Component
{

    public $tasks;

    protected $listeners = [
        'taskUpdated' => 'getTasks',
        'taskListVisibility' => 'getTasks'
    ];

    public function getTasks($showCompleted = 'true')
    {
        $this->tasks = Task::query()
            ->where('user_id', '=', Auth::id())
            ->when($showCompleted!=='true', function($query, $showCompleted) {
                $query->whereNull('completed');
            })
            ->orderBy('completed')->orderBy('created_at', 'DESC')
            ->get();
    }

    public function mount()
    {
        $this->getTasks();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}

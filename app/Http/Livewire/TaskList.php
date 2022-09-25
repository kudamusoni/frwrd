<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskList extends Component
{

    public $tasks;

    protected $listeners = [
        'taskUpdated' => 'getTasks'
    ];

    public function getTasks()
    {
        $this->tasks = Task::query()->where('user_id', '=', Auth::id())->orderBy('completed')->orderBy('created_at', 'DESC')->get();
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

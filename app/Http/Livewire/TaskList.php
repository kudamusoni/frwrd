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
        'taskListVisibility' => 'getTasks',
        'orderByChange' => 'getTasks'
    ];

    public function getTasks($filters=array('orderBy'=>'priority-desc','completed'=>'true'))
    {
        $orderByVal = $this->getOrderBy($filters['orderBy']);

        $showCompleted = $filters['completed'];
        $this->tasks = Task::query()
            ->where('user_id', '=', Auth::id())
            ->when($showCompleted!=='true', function($query, $showCompleted) {
                $query->whereNull('completed');
            })
            ->orderBy('completed')->orderBy($orderByVal[0], $orderByVal[1])
            ->get();
    }

    public function getOrderBy($orderBy)
    {
        if ($orderBy === 'priority-asc') {
            return ['priority', 'ASC'];
        }
        if ($orderBy === 'priority-desc') {
            return ['priority', 'DESC'];
        }
        return ['completed', 'ASC'];
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

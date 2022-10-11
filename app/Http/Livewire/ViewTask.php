<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewTask extends Component
{

    public $task;

    public $name;

    public $description;

    public $priority;

    protected $rules = [
        'name' => 'required|max:255',
        'description' => 'max:2055',
        'priority' => 'nullable',
    ];

    public function mount($id)
    {
        $this->task = Task::findOrFail($id);
        $this->name = $this->task->name;
        $this->description = $this->task->description;
        $this->priority = $this->task->priority;
    }

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        $this->task->name = $validatedData['name'];
        $this->task->description = $validatedData['description'];
        $this->task->priority = $validatedData['priority'];
        $this->task->save();

        sleep(1);

        return back();

    }

    public function render()
    {
        return view('livewire.view-task');
    }
}

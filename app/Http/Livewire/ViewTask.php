<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewTask extends Component
{

    public $task;

    public $name;

    public $extra_details;

    protected $rules = [
        'name' => 'required|max:255',
        'extra_details' => 'max:2055',
    ];

    public function mount($id)
    {
        $this->task = Task::findOrFail($id);
        $this->name = $this->task->name;
        $this->extra_details = $this->task->extra_details;
    }

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        $this->task->name = $validatedData['name'];
        $this->task->extra_details = $validatedData['extra_details'];
        $this->task->save();

        sleep(2);

        return back();

    }

    public function render()
    {
        return view('livewire.view-task');
    }
}

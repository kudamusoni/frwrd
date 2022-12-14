<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateTask extends Component
{
    public $name;

    public $project;

    protected $rules = [
        'name' => 'required|max:255',
    ];

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $validatedData['user_id'] = Auth::id();

        $validatedData['project_id'] = $this->project;

        Task::create($validatedData);

        sleep(2);

        $this->reset('name');

        $this->emit('taskUpdated');
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}

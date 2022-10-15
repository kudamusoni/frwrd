<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateProjects extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required|max:255',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-projects');
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $validatedData['user_id'] = Auth::id();

        Project::create($validatedData);

        sleep(2);

        $this->reset('name');

        $this->emit('newProject');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;

    protected $listeners = [
        'newProject' => 'getProjects'
    ];

    public function getProjects()
    {
        $this->projects = Project::query()
        ->where('user_id', '=', Auth::id())->get();
    }

    public function mount()
    {
        $this->getProjects();
    }

    public function render()
    {
        return view('livewire.project-list');
    }
}

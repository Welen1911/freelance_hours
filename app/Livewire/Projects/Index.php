<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    #[Computed()]
    public function projects () {
        return Project::query()->inRandomOrder()->get();
    }

    public function render()
    {
        return view('livewire.projects.index');
    }
}

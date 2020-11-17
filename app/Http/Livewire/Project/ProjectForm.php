<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ProjectForm extends Component
{

    public Project $project;

    public $clients;

    public $successMessage;

    protected $rules = [
        'project.client_id' => 'required',
        'project.name' => 'required',
        'project.is_active' => 'required',
        'project.date' => 'required|date-format:Y-m-d'
    ];

    public function mount(){
//        if($this->project->is_active == '') $this->project->is_active = 1;
//        $this->project->is_active = 1;
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.project.project-form');
    }

    public function submitForm(){

        $this->validate();

        $this->project->save();

        $this->successMessage = 'Done!';

        return redirect('project');
    }

    public function clearSuccessMessage(){
        $this->successMessage = null;
    }
}

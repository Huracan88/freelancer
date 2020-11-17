<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $view_data = [
            'projects' => Project::all()
        ];
        return view('project.index')->with($view_data);
    }

    public function new(){

        $view_data = [
            'project' => new Project(),
            'clients' => Client::all()->pluck('name', 'id')->toArray()
        ];

        return view('project.form')->with($view_data);
    }

    public function edit(Project $project){

        $view_data = [
            'project' => $project,
            'clients' => Client::all()->pluck('name', 'id')->toArray()
        ];

        return view('project.form')->with($view_data);
    }

    public function insert(Request $request){


        $project = new Project();
        $project->name = $request->get('name');
        $project->client_id = $request->get('client_id');
        $project->date = $request->get('date');

        $project->save();

        return redirect('project/');

    }

}

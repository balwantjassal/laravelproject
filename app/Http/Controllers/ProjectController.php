<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
class ProjectController extends Controller
{
    //
    public function index(){
        $projects = Project::all();
        return view('projects.index',compact('projects'));
    }
    public function create(Project $project){

        return view('projects.create_project');
    }
    public function store(Project $project){

       $validated = request()->validate([
            'title' => 'required | min:6 | unique:projects',
            'desc'  => 'required | min:6',

            ]);
            Project::create($validated);
            // Project::create([
            //     'title'=>request('title'),
            //     'desc'=>request('desc')
            // ]);

       // $project->title = request('title');
       // $project->desc = request('description');
       // $project->save();
       return redirect("/projects");

    }
    public function edit(Project $project){

        return view('projects.edit',compact('project'));
    }

    public function update(Project $project){

        $project->title = request('title');
        $project->desc = request('desc');
        $project->update();
        return redirect("/projects");

    }
    public function show(Project $project){


        return view('projects.display',compact('project'));
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect("/projects");
    }
}

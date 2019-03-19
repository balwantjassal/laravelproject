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
    public function create(){
        return view('projects.create_project');
    }
    public function store(){
        $project = new \App\Project;
        $project->title = request('title');
        $project->desc = request('description');
        $project->save();
        return redirect("/projects");

    }
    public function edit($id){
        $project = Project::find($id);

        return view('projects.edit',compact('project'));
    }

    public function update($id){
        $project = Project::find($id);
        $project->title = request('title');
        $project->desc = request('description');
        $project->update();
        return redirect("/projects");

    }
    public function show($id){
        $project = Project::find($id);

        return view('projects.display',compact('project'));
    }
}

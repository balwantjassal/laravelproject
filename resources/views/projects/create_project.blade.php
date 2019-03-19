@extends('template')
@section('content')
<div class="container-fluid">
    <div class="container jumbotron">
        <h1>Create a Project</h1>
        <fieldset>
            <legend>Project Specifications</legend>
            <form method="post" action="/projects">
                 {{ csrf_field() }}
                Project Title:<br/>
                <input type="text" name="title" placeholder="Title of the project"/>
                <br/>
                Project Description:<br/>
                <textarea name="description" rows="10" cols="60" placeholder="Project Description write here"></textarea></textarea>
                <br/>
                <button name="btn1">Create Project</button>


            </form>
        </fieldset>
        </div>
    </div>
    @endsection('content')

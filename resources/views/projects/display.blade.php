@extends('template')
@section('content')
<div class="container">
<div class="jumbotron">
    <h2>Project Details</h2>
    <h4 class="text-primary">{{ $project->title }}</h4>
    <p class="text-secondary">
        {{ $project->desc }}
    </p>
    <div class="container">
        <div class="row">
           <div class="col-md-1">

           </div>
           <div class="col-md-11">
                <h3>List of Tasks</h3>
                <ul>
                    @foreach($project->tasks as $task)
                        <li>
                            <form method="post" action="/tasks/{{ $task->id }}">
                                @method('PATCH')
                                @csrf
                            <div class="form-check">
                                <input id="completed" name="completed"  {{ $task->completed ? 'checked':'' }} class="form-check-input" type="checkbox" onclick="this.form.submit()">
                                <label  for="my-input" class="form-check-label {{ $task->completed ? ' is-complete':'' }}">{{ $task->description }}</label>
                            </div>
                        </form>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>


    </div>
    <hr>
    <div>
        <a class="btn btn-success" href="/projects/{{ $project->id }}/edit">Edit project</a>
    </div>
    <br>
    <div>
        <form method="POST" action="/projects/{{ $project->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-success" value="Delete">
        </form>
    </div>

</div>
</div>


@endsection('content')

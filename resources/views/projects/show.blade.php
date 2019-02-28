@extends('layout')

@section('title')
    {{ $project->title }}
@endsection

@section('content')

    <div class="field">
        <p class="control">
            <h1 class="title">Show project</h1> <hr>

            <h3 class="label">{{ $project->title }}</h3>
            <p class="content">{{ $project->description }}</p>
            <p>
                <a href="/projects/{{ $project->id }}/edit" class="button is-success is-rounded">Edit Project</a>
            </p>
        </p>
    </div> <hr>

    @if ($project->tasks->count())
        @foreach ($project->tasks as $task)
            <div class="">
                <form class="" action="/tasks/{{ $task->id }}" method="post">
                    @csrf @method('PATCH')
                    <label class="checkbox {{ $task->completed ? 'is-completed' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
    @endif

@endsection

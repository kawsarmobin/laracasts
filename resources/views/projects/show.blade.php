@extends('layout')

@section('title')
    {{ $project->title }}
@endsection

@section('content')

    <h1 class="title">Show project</h1> <hr>

    <h3 class="label">{{ $project->title }}</h3>
    <p class="content">{{ $project->description }}</p>

    <div class="field">
        <p class="control">
            <a href="/projects/{{ $project->id }}/edit" class="button is-danger is-rounded">Edit Project</a>
        </p>
    </div>

    @if ($project->tasks->count())
        @foreach ($project->tasks as $task)
            <li>{{ $task->description }}</li>
        @endforeach
    @endif

@endsection

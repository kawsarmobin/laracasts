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
    </div>

    @if ($project->tasks->count())
        <div class="box">
            @foreach ($project->tasks as $task)
                <form method="POST" action="/completed-tasks/{{ $task->id }}">
                    @if ($task->completed)
                        @method('DELETE')
                    @endif

                    @csrf

                    <label class="checkbox {{ $task->completed ? 'is-completed' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            @endforeach
        </div>
    @endif

    {{-- add a new task form --}}
    <form class="box" action="/projects/{{ $project->id }}/tasks" method="post">
        @csrf
        <div class="field">
          <label class="label">New Task</label>
          <div class="control">
            <input class="input" type="text" name="description" placeholder="New Task" required>
          </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">Add Task</button>
            </div>
        </div>
    </form>

@endsection

@extends('layout')

@section('title')
    {{ $project->title }}
@endsection

@section('content')

    <h1 class="title">Edit a project</h1>

    <form action="/projects/{{ $project->id }}" method="post" style="margin-bottom: 1em">
        @csrf @method('patch')

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" placeholder="project description" class="textarea" rows="8" cols="80">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <p class="control">
                <button type="submit" class="button is-link is-rounded" name="button">Update Project</button>
            </p>
            <p class="control">
                <a href="/projects/{{ $project->id }}" class="button is-danger is-rounded">Delete Project</a>
            </p>
        </div>
    </form>

    {{-- <form class="" action="/projects/{{ $project->id }}" method="post">
        @csrf @method('DELETE')
        <div class="field">
            <p class="control">
                <button type="submit" class="button is-danger is-rounded" name="button">Delete Project</button>
            </p>
        </div>
    </form> --}}

@endsection

@extends('layout')

@section('title')
    {{ $project->title }}
@endsection

@section('content')

    <h1 class="title">Show project</h1>

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                {{ $project->title }}
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                {{ $project->description }}
            </div>
        </div>

        <div class="field">
            <p class="control">
                <a href="/projects/{{ $project->id }}/edit" class="button is-danger is-rounded">Edit Project</a>
            </p>
        </div>

@endsection

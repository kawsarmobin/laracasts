@extends('layout')

@section('title')
    {{ $project->title }}
@endsection

@section('content')

    <h1 class="title">Edit a project</h1>

    <form action="/projects/{{ $project->id }}" method="post">
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


        <div class="field">
            <div class="control">
                <button type="submit" name="button">Submit</button>
            </div>
        </div>
    </form>

@endsection

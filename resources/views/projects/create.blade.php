@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1 class="title">Create a new project</h1>

    <form class="" action="/projects" method="post">
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input is-rounded" name="title" placeholder="title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" placeholder="project description" class="textarea" rows="8" cols="80"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-rounded" name="button">Submit</button>
            </div>
        </div>
    </form>

@endsection

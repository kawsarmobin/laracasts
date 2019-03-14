@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <h1 class="title">Create a new project</h1> <hr>

    <form class="" action="/projects" method="post">
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input is-rounded {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="add your new title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" placeholder="write your project description" class="textarea has-fixed-size {{ $errors->has('description') ? 'is-danger' : '' }}" rows="8" cols="80">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link is-rounded" name="button">Submit</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection

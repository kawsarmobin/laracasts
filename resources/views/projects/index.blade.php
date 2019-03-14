@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <h1 class="title">All Project</h1> <hr>

    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

@endsection

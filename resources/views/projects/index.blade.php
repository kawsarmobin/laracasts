@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1 class="title">All Project</h1>

    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

@endsection

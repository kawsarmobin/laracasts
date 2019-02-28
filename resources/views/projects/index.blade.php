@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1 class="title">Project</h1>

    @foreach ($projects as $project)
        <li><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></li>
    @endforeach

@endsection

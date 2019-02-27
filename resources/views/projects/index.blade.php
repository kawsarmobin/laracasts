@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1 class="title">Project</h1>

    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach

@endsection

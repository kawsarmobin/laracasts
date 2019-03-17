@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <h1 style="color: white; text-shadow: 6px 6px 10px #000000;" class="title">All Project</h1> 
    
    <hr style="box-shadow: 10px 20px 30px #888888; padding: 3px;">

    <ul>
        @foreach ($projects as $project)
            <li style="line-height: 40px"><a style="text-decoration: none" href="/projects/{{ $project->id }}"><span style="box-shadow: 10px 20px 30px #888888; padding: 5px;">{{ $project->title }}</span></a></li>
        @endforeach
    </ul>

@endsection

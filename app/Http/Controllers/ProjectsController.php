<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        /* 
            System one
         */

        // $attributes['owner_id'] = auth()->id();
        // Project::create($attributes); 

        /* 
            System two
         */

        Project::create($attributes + ['owner_id' => auth()->id()]);

        return redirect('/projects');
    }

    /*
        Filesystem not understood 
     */

    // public function show(Filesystem $file)
    // {
    //     dd($file);
    // }

    /* 
        abort_if use korbo
        othoba
        project policy -- $this->authorize() use korbo
     */

    public function show(Project $project)
    {
        // if ($project->owner_id !== auth()->id()) {
        //     abort(403);
        // }

        // abort_if($project->owner_id !== auth()->id(), 403);

        // abort_unless(auth()->user()->owns($project), 403);

        // $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}

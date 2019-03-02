<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        // <!--- method-3 ------!>
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        // <!--- method-2 ------!>
        // $project->addTask(request('description'));

        // <!--- method-1 ------!>
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description'),
        // ]);

        return back();
    }

    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}

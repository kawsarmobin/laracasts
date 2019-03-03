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
        // $attributes = request()->validate(['description' => 'required']);
        // $project->addTask($attributes);

        // <!--- method-2 ------!>
        $project->addTask(
            request()->validate(['description' => 'required'])
        );

        // <!--- method-1 ------!>
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description'),
        // ]);

        return back();
    }

    // public function update(Task $task)
    // {
    //     if (request()->has('completed')) {
    //         $task->complete();
    //     } else {
    //         $task->incomplete();
    //     }
    //
    //     request()->has('completed') ? $task->complete() : $task->incomplete();
    //
    //     $method = request()->has('completed') ? 'complete' : 'incomplete';
    //
    //     $task->$method();
    //
    //     return back();
    // }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/projects', 'ProjectsController')->except('delete');
Route::get('/projects/{project}/delete', 'ProjectsController@destroy')->name('projects.destroy');

Route::patch('tasks/{task}', 'ProjectTasksController@update');

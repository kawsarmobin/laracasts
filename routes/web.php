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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/projects', 'ProjectsController')->except('delete');

Route::get('/projects/{project}/delete', 'ProjectsController@destroy')->name('projects.destroy');

Route::post('projects/{project}/tasks', 'ProjectTasksController@store');
// Route::patch('tasks/{task}', 'ProjectTasksController@update');

Route::post('/completed-tasks/{tasks}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{tasks}', 'CompletedTasksController@destroy');

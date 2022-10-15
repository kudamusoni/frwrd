<?php

use App\Http\Controllers\MotivationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect('/projects');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/projects', function() {
        return view('projects');
    })->name('projects');

    Route::get('/task/{id}', function($id) {
        return view('single-task-view', [
            'task' => $id
        ]);
    })->name('view-task');

    Route::get('/project/{project}', function($project) {
        return view('tasks', [
            'project' => $project
        ]);
    })->name('project-tasks');

    Route::get('/project/{project}/task/{task}', function($project, $task) {

    });

    // Route::get('/motivation', [MotivationController::class, 'index'])->name('motivation');

});
require __DIR__.'/auth.php';

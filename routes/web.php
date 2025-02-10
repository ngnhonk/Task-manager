<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::patch('/tasks/{task}/toggle-starred', [TaskController::class, 'toggleStarred'])
    ->name('tasks.toggleStarred');
Route::get('/tasks/starred', [TaskController::class, 'showStarred']);
Route::resource('tasks', TaskController::class);

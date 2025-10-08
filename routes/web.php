<?php

use App\Http\Controllers\TaskController;

// Show all tasks
Route::get('/', [TaskController::class, 'index']);

// Add a new task
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Mark task as complete/incomplete
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Delete a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
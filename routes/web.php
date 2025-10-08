<?php

use App\Http\Controllers\TaskController;

// Show all tasks
Route::get('/', [TaskController::class, 'index']);

// Add a new task
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Show the edit form for a task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Mark task as complete/incomplete
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Delete a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
<?php

namespace App\Http\Controllers;

use App\Models\Task; // Import the Task model
use Illuminate\Http\Request; // Import Request for handling form data

class TaskController extends Controller
{
    // Display all tasks
    public function index(){
        $tasks = Task::all(); // Get all tasks from the database
        return view('tasks.index', compact('tasks')); // Pass tasks to the view
    }

    // Store a new task
    public function store(Request $request){
        // Validate inpute (title is required)
        $request->validate([
            'title' => 'required'
        ]);

        // Create a new task in the database
        Task::create([
            'title' => $request->title
        ]);

        return redirect()->back(); // Redirect back to the task list page
    }

    // Show edit form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update task title
    public function update(Request $request, Task $task)
    {
        // if title is present, update title
        if ($request->has('title')) {
            $request->validate(['title' => 'required|string|max:255']);
            $task->update(['title' => $request->title]);
            return redirect('/')->with('success', 'Task updated successfully');
        }

        // Otherwise, toggle completion
        $task->update([
            'is_completed' => !$task->is_completed
        ]);

        return redirect()->back();
    }

    // Delete a task
    public function destroy(Task $task) {
        $task->delete(); // Remove task from the database
        return redirect()->back();
    }
}

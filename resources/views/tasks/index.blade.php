<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Task Manager</h1>

        <!-- Form to add a new task -->
         <form action="{{ route('tasks.store') }}" method="POST" class="flex mb-4">
            @csrf <!-- CSRF token for security -->
            <input type="text" name="title" placeholder="Enter new task"
            class="flex-grow border border-gray-300 p-2 rouded-l" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Add</button>
        </form>

        <!-- Display list of tasks -->
         <ul>
            @foreach ($tasks as $task)
            <li class="flex justify-between items-center border-b py-2">

            <!-- Form to toggle task completion -->
             <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf 
                @method('PATCH') <!-- PATCH method for updating -->
                <button type="submit" class="{{ $task->is_completed ? 'line-through text-gray-400' : '' }}">
                    {{ $task->title }} <!-- Task tiitle --> 
                </button>
            </form>

            <!-- Form to delete a task -->
             <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                @csrf 
                @method('DELETE') <!-- DELETE method -->
                <button type="submit" class="text-red-500 hover:text-red-700">🗑</button>
            </form>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>


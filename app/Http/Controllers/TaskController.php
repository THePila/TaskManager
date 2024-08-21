<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = task::all(); // Fetch all tasks from the database
        return view('dashBoard', compact('tasks')); // Pass the tasks to a view
    }
    public function create()
    {
        
    return view('tasks.create'); // Show the task creation form
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
            'status' => 'nullable',
        ]);
        task::create($request->all()); // Create a new task
        return redirect()->route('dashBoard')->with('success', 'Task created successfully!');
    }
    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); // Show a specific task
    }
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); // Show the task editing form
    }
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
            'status' => 'nullable',
        ]);
        $task->update($request->all()); // Update the task
        return redirect()->route('dashBoard')->with('success', 'Task updated successfully!');
    }
    public function destroy(Task $task)
    {
        $task->delete(); // Delete the task
        return redirect()->route('dashBoard')->with('success', 'Task deleted successfully!');
    }
}

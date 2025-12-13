<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskManager extends Controller
{
    // 1️⃣ Seznam všech tasků
    public function listTask()
    {
        $tasks = Tasks::all(); // nebo orderBy podle potřeby
        return view('welcome', compact('tasks'));
    }

    // 2️⃣ Formulář pro nový task
    public function addTask()
    {
        return view('tasks.add');
    }

    // 3️⃣ Uložení nového tasku
    public function addTaskPost(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'deadline' => 'required|date',
        ]);

        $task = Tasks::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'pending', // default status
        ]);

        return redirect()->route('home')
            ->with('success', 'Task added successfully');
    }

    // 4️⃣ Změna statusu tasku
    public function updateTaskStatus($id)
    {
        $task = Tasks::findOrFail($id);
        $task->status = 'done';
        $task->save();

        return redirect()->route('home')
            ->with('success', 'Task updated successfully');
    }

    public function deleteTaskStatus($id)
    {
        if (Tasks::where('id', $id)->delete()) {
            return redirect()->route('home')
                ->with('success', 'Task was done and has been deleted');
        }

        return redirect()->route('home')
            ->with('info', 'Task was already done');
    }
}

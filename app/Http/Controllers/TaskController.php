<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskdashboard()
    {
        $tasks = Task::with('user')->orderBy('created_at', 'desc')->paginate(5);
        // $tasks = Task::with('user')->paginate(5);
        return view('tasks.taskdashboard', ['tasks' => $tasks]);
    }

    function createtask()
    {
        return view('tasks.createtask');
    }

    function getusername()
    {
        $user = User::all();
        return view('tasks.createtask', ['users' => $user]);
    }

    public function storetask(Request $request)
    {
        $request->validate([
            // 'username' => 'required|exists:users,id',
            'taskdetail' => 'required|string|max:255',
            'tasktype' => 'required|string',
        ]);

        $task = new Task();
        $task->user_id = $request->username;
        $task->taskdetail = $request->taskdetail;
        $task->tasktype = $request->tasktype;
        $task->save();
        return redirect()->route('task.dashboard');
    }
}

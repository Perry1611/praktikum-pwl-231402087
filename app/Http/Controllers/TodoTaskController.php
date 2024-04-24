<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home' ,[
            'tasks' => $tasks,
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate(
            [
            'task' => 'required|min:5',

            ],
            [
                'task.required' => 'Tugas harus diisi',
                'task.min' => 'Tugas Minimal 5 Karakter',
            ]
    );

        task::create([
            'task' => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect('/');
    }

    public function destroy(Request $request){
        Task::where('id', $request->id)->delete();
        return redirect('/')->with('success', 'Post deleted successfully');
    }
}


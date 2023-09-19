<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\destroy;
use App\Models\User;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = response()->json(Task::all());
        return $tasks;
    }
    public function show($id)
    {
        $tasks = response()->json(Task::find($id));
        return $tasks;
    }
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect('/task/list');
    }
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->end_date = $request->end_date;
        $task->user_id = $request->user_id;
        $task->status = $request->status;
        $task->save();
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->end_date = $request->end_date;
        $task->user_id = $request->user_id;
        $task->status = $request->status;
        $task->save();
        return redirect('/task/list');
    }
    public function newView(){
        $users = User::all(); 
        return view ('task.new', ['users' => $users]); 
    }

    public function editview ($id){
        $users = User::all(); 
        $task = Task::find ($id); 
        return view('task.edit', ['users' => $users, 'task' => $task]);
    }
    public function listview(){
        $tasks = Task::all(); 
        return view('task.list', ['tasks' => $tasks]);
    } 


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index() {

        $tasks = Task::all();

        return view('tasks', compact('tasks'));
        // return view('tasks')->with(['tasks'=>$tasks, 'nextdata'=>$another]);
    }
    
    public function create() {
        return view('task.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        // Task::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);


        // Task::create($request->all());

        return redirect('/tasks');
    }

    public function edit($taskid) {

        $task = Task::find($taskid);

        return view('task.edit', compact('task'));
    }

    
    public function update(Request $request, $taskid) {

        $task = Task::find($taskid);

        $task->update($request->all());
        return redirect()->route('task.index');
        
    }

    
    public function destroy($taskid) {

        Task::delete($taskid);

        $task = Task::find($taskid);

        $task->delete();
        return redirect()->route('task.index');
        
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all tasks and paginate
        $tasks = Task::paginate(1);

        //return view and also past the fetch task to the index page
        return view('tasks.index')->with('tasks',$tasks);
        //same as the below
        // return view('tasks.index')->withTask($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
            $this->validate($request, [
                'name' => 'required|string|max:225|min:3',
                'description' => 'required|string|max:10000|min:5',
                'due_date' => 'required|date',
            ]);

            //Create New Task
            $task = new Task;

            //Assign Data from Our Request
            $task->name = $request->name;
            $task->description = $request->description;
            $task->due_date = $request->due_date;

            //Save The New Task
            $task->save();

            //Flash session message with success
            Session::flash('success', 'Created Task Sucessfully');

            //Return a redirect
            return redirect()->route('tasks.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

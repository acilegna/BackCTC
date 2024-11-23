<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            'tasks' => $tasks
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $task = new Task;

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->date = $request->input('date');
        $task->location = $request->input('location');
        $task->responsible = $request->input('responsible');
        $task->likes = $request->input('likes');


        $task->save();

        return response()->json([
            'message' => 'Registro creado',
            'task' => $task
        ]);
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $task = Task::find($id);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->date = $request->input('date');
        $task->location = $request->input('location');
        $task->responsible = $request->input('responsible');
        $task->likes = $request->input('likes');

        $task->save();

        return response()->json([
            'message' => 'Registro modificado',
            'task' => $task
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);

        $task->delete();

        return response()->json([
            'message' => 'Registro eliminado'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() {}
}
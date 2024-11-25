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
        return response()->json(
            // 'tasks' => $tasks
            $tasks
        );
    }



    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }





    /**
     * Update the specified resource in storage.
     */
    /*     

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return response()->json($task, 200);
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

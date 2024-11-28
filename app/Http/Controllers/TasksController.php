<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function allId($id)
    {
        $tasks = Task::find($id);

        if ($tasks->count() > 0) {
            return response()->json(
                $tasks
            );
        } else {
            return response()->json([
                'status' => 404,
                'tasks' => 'No se encontraron registros'
            ], 404);
        }
    }
    public function index()
    {
        $tasks = Task::all();

        if ($tasks->count() > 0) {
            return response()->json(
                $tasks
            );
        } else {
            return response()->json([
                'status' => 404,
                'tasks' => 'No se encontraron registros'
            ], 404);
        }
    }



    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $task = Task::create($request->all());
        if ($task) {
            return response()->json([
                'status' => 200,
                'message' => 'Tarea creada',

            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Error'
            ], 500);
        }
    }





    /**
     * Update the specified resource in storage.
     */
    /*       */

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if ($task) {
            $task->update($request->all());
            return response()->json($task, 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Registro no encontrado'
            ], 404);
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if ($task) {

            $task->delete();

            return response()->json([
                'status' => 200,
                'message' => 'tarea eliminada'
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Registro no encontrado'
            ], 404);
        }
    }

    public function incrementa($id, $like)
    {

        $task = Task::find($id);
        if ($task and $like) {
            $incrementa = $task->likes + $like;
            $task->likes = $incrementa;
            $task->save();
            return response()->json($task, 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Registro no encontrado'
            ], 404);
        }
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

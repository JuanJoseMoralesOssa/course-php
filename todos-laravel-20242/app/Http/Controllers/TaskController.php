<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // El nombre de la cadena es el metodo del modelo
        return Task::with(['project', 'user'])->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        // return Task::create($request->all());
        $task = new Task($request->all());
        // Log::debug($request->all());
        // $task->task_name = $request->task_name;
        // $task->task_description = $request->task_description;
        // $task->task_is_done = $request->task_is_done;
        // $task->task_observation = $request->task_observation;
        $task->save();
        return $task;
    }

    // public function show(string $id)
    // {
    //     return Task::findOrFail($id);
    // }

    /**
     * Display the specified resource.
     * con inyeccion de dependencias
     */
    // El parametro se debe llamar igual a la variable y el tipo de dato debe ser el modelo
    public function show(Task $task) // model binding
    {
        return $task->load(['user','project']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // $task->task_name = $request->task_name ?? $task->task_name;
        // $task->task_description = $request->task_description ?? $task->task_description;
        // $task->task_is_done = $request->task_is_done ?? $task->task_is_done;
        // $task->task_observation = $request->task_observation ?? $task->task_observation;
        $task->update($request->all());
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json([
            'message' => 'Task deleted successfully',
            'task' => $task
        ], 200);
    }
}

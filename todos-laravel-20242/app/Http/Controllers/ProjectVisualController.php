<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Mail\StoreProjectMail;
use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Log;

class ProjectVisualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Projects/Index', [
            // 'projects' => Project::with('tasks')->get()
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * formulario
     */
    public function create()
    {
        return Inertia::render('Projects/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        // Log::info($request->all());
        $project = Project::create($request->all());
        //Enviar correo electronico de notificacion
        Mail::to($request->user())->send(new StoreProjectMail($project));
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * formulario
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

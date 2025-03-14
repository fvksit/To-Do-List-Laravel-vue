<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskAssignmentRequest;
use App\Http\Resources\TaskAssignmentResource;
use App\Models\TaskAssignment;

class TaskAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskAssignments = TaskAssignment::all();
        return TaskAssignmentResource::collection($taskAssignments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskAssignmentRequest $request)
    {
        $validated = $request->validated();

        $taskAssignment = TaskAssignment::create($validated);

        return new TaskAssignmentResource($taskAssignment);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskAssignment $taskAssignment)
    {
        return new TaskAssignmentResource($taskAssignment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskAssignment $taskAssignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskAssignmentRequest $request, TaskAssignment $taskAssignment)
    {
        $validated = $request->validated();

        $taskAssignment->update($validated);

        return new TaskAssignmentResource($taskAssignment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskAssignment $taskAssignment)
    {
        $taskAssignment->delete();

        return response()->json(['message' => 'Task assignment deleted successfully']);
    }
}

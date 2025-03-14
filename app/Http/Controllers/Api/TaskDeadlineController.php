<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskDeadlineRequest;
use App\Http\Resources\TaskDeadlineResource;
use App\Models\TaskDeadline;

class TaskDeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskDeadlines = TaskDeadline::all();
        return TaskDeadlineResource::collection($taskDeadlines);
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
    public function store(TaskDeadlineRequest $request)
    {
        $validated = $request->validated();

        $taskDeadline = TaskDeadline::create($validated);

        return new TaskDeadlineResource($taskDeadline);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskDeadline $taskDealine)
    {
        return new TaskDeadlineResource($taskDealine);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskDeadline $taskDealine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskDeadlineRequest $request, TaskDeadline $taskDealine)
    {
        $validated = $request->validated();

        $taskDealine->update($validated);

        return new TaskDeadlineResource($taskDealine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskDeadline $taskDealine)
    {
        $taskDealine->delete();

        return response()->json(['message' => 'Task deadline deleted successfully']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskTagRequest;
use App\Http\Resources\TaskTagResource;
use App\Models\TaskTag;

class TaskTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskTags = TaskTag::all();
        return TaskTagResource::collection($taskTags);
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
    public function store(TaskTagRequest $request)
    {
        $validated = $request->validated();

        $taskTag = TaskTag::create($validated);

        return new TaskTagResource($taskTag);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskTag $taskTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskTag $taskTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskTagRequest $request, TaskTag $taskTag)
    {
        $validated = $request->validated();

        $taskTag->update($validated);

        return new TaskTagResource($taskTag);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskTag $taskTag)
    {
        $taskTag->delete();

        return response()->json(['message' => 'Task tag deleted successfully']);
    }
}

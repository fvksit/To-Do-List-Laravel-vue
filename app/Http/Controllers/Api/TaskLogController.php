<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskLogRequest;
use App\Http\Resources\TaskLogResource;
use App\Models\TaskLog;

class TaskLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskLogs = TaskLog::all();
        return TaskLogResource::collection($taskLogs);
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
    public function store(TaskLogRequest $request)
    {
        $validated = $request->validated();

        $taskLog = TaskLog::create($validated);

        return new TaskLogResource($taskLog);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskLog $taskLog)
    {
        return new TaskLogResource($taskLog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskLog $taskLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskLogRequest $request, TaskLog $taskLog)
    {
        $validated = $request->validated();

        $taskLog->update($validated);

        return new TaskLogResource($taskLog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskLog $taskLog)
    {
        $taskLog->delete();

        return response()->json(['message' => 'Task log deleted successfully']);
    }
}

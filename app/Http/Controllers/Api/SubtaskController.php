<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubtaskRequest;
use App\Http\Resources\SubtaskResource;
use App\Models\Subtask;

;

class SubtaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subtasks = Subtask::all();
        return SubtaskResource::collection($subtasks);
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
    public function store(SubTaskRequest $request)
    {
        $validated = $request->validated();

        $subtask = Subtask::create($validated);

        return new SubtaskResource($subtask);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subtask $subtask)
    {
        return new SubtaskResource($subtask);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subtask $subtask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubTaskRequest $request, Subtask $subtask)
    {
        $validated = $request->validated();

        $subtask->update($validated);

        return new SubtaskResource($subtask);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subtask $subtask)
    {
        $subtask->delete();

        return response()->json(['message' => 'Subtask deleted successfully']);
    }
}

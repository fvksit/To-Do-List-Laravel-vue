<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskCategoryRequest;
use App\Http\Resources\TaskCategoryResource;
use App\Models\TaskCategory;

class TaskCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskCategories = TaskCategory::all();
        return TaskCategoryResource::collection($taskCategories);
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
    public function store(TaskCategoryRequest $request)
    {
        $validated = $request->validated();

        $taskCategory = TaskCategory::create($validated);

        return new TaskCategoryResource($taskCategory);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskCategory $taskCategory)
    {
        return new TaskCategoryResource($taskCategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskCategory $taskCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskCategoryRequest $request, TaskCategory $taskCategory)
    {
        $validated = $request->validated();

        $taskCategory->update($validated);

        return new TaskCategoryResource($taskCategory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskCategory $taskCategory)
    {
        $taskCategory->delete();

        return response()->json(['message' => 'TaskCategory deleted successfully']);
    }
}

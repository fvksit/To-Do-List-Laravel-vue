<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReminderRequest;
use App\Http\Resources\ReminderResource;
use App\Models\Reminder;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reminders = Reminder::all();
        return response()->json($reminders);
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
    public function store(ReminderRequest $request)
    {
        $validated = $request->validated();

        $reminder = Reminder::create($validated);

        return new ReminderResource($reminder);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reminder $reminder)
    {
        return new ReminderResource($reminder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminder $reminder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReminderRequest $request, Reminder $reminder)
    {
        $validated = $request->validated();

        $reminder->update($validated);

        return new ReminderResource($reminder);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return response()->json(['message' => 'Reminder deleted successfully']);
    }
}

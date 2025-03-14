<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $validations = Notification::all();
        return NotificationResource::collection($validations);
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
    public function store(NotificationRequest $request)
    {
        $validated = $request->validated();

        $notification = Notification::create($validated);

        return new NotificationResource($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        return new NotificationResource($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NotificationRequest $request, Notification $notification)
    {
        $validated = $request->validated();

        $notification->update($validated);

        return new NotificationResource($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return response()->json(['message' => 'Notification deleted successfully']);
    }
}

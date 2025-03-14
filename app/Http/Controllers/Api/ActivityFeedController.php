<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityFeedRequest;
use App\Http\Resources\ActivityFeedResource;
use App\Models\ActivityFeed;

class ActivityFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activityFeeds = ActivityFeed::all();
        return ActivityFeedResource::collection($activityFeeds);
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
    public function store(ActivityFeedRequest $request)
    {
        $validated = $request->validated();

        $activityFeed = ActivityFeed::create($validated);

        return new ActivityFeedResource($activityFeed);
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityFeed $activityFeed)
    {
        return new ActivityFeedResource($activityFeed);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityFeed $activityFeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivityFeedRequest $request, ActivityFeed $activityFeed)
    {
        $validated = $request->validated();

        $activityFeed->update($validated);

        return new ActivityFeedResource($activityFeed);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityFeed $activityFeed)
    {
        $activityFeed->delete();

        return response()->json(['message' => 'Activity Feed deleted successfully']);
    }
}

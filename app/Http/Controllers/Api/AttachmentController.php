<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Http\Resources\AttachmentResource;
use App\Models\Attachment;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attachments = Attachment::all();
        return AttachmentResource::collection($attachments);
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
    public function store(AttachmentRequest $request)
    {
        $validated = $request->validated();

        $attachment = Attachment::create($validated);

        return new AttachmentResource($attachment);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attachment $attachment)
    {
        return new AttachmentResource($attachment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AttachmentRequest $request, Attachment $attachment)
    {
        $validated = $request->validated();

        $attachment->update($validated);

        return new AttachmentResource($attachment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attachment $attachment)
    {
        $attachment->delete();
        return response()->json(['message' => 'Attachment deleted successfully']);
    }
}

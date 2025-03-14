<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'status' => $this->status,
            'priority' => $this->priority,
            'assigned_to' => new UserResource($this->assignedTo),
            'created_by' => new UserResource($this->createdBy),
            'categories' => CategoryResource::collection($this->categories),
            'subtasks' => SubtaskResource::collection($this->subtasks),
            'comments' => CommentResource::collection($this->comments),
            'logs' => TaskLogResource::collection($this->logs),
            'reminders' => ReminderResource::collection($this->reminders),
            'deadline' => new TaskDeadlineResource($this->deadline),
            'tags' => TagResource::collection($this->tags),
            'task_assignments' => TaskAssignmentResource::collection($this->taskAssignments),
            'attachments' => AttachmentResource::collection($this->attachments),
            'notifications' => NotificationResource::collection($this->notifications),
            'activity_feeds' => ActivityFeedResource::collection($this->activityFeeds),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

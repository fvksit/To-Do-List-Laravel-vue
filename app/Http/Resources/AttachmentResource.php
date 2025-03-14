<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'task' => new TaskResource($this->task),
            'file_name' => $this->file_name,
            'file_path' => $this->file_path,
            'uploaded_by' => new UserResource($this->uploadedBy),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

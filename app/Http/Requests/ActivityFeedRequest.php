<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityFeedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'task_id' => 'required|exists:tasks,id',
            'activity_type' => 'required|string',
            'activity_description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User ID is required.',
            'task_id.required' => 'Task ID is required.',
            'activity_type.required' => 'Activity type is required.',
            'activity_description.required' => 'Activity description is required.',
        ];
    }
}

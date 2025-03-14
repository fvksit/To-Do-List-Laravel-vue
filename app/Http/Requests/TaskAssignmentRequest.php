<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskAssignmentRequest extends FormRequest
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
            'task_id' => 'required|exists:tasks,id',
            'assigned_user_id' => 'required|exists:users,id',
            'assigned_at' => 'required|date',
            'due_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'task_id.required' => 'Task ID is required.',
            'assigned_user_id.required' => 'Assigned user is required.',
            'assigned_at.required' => 'Assigned date is required.',
            'due_date.required' => 'Due date is required.',
        ];
    }
}

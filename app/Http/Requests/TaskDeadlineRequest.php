<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskDeadlineRequest extends FormRequest
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
            'deadline_time' => 'required|date',
            'reminder_sent' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'task_id.required' => 'Task ID is required.',
            'deadline_time.required' => 'Deadline time is required.',
        ];
    }
}

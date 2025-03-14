<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskLogRequest extends FormRequest
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
            'status_from' => 'required|in:belum selesai,selesai,ditunda',
            'status_to' => 'required|in:belum selesai,selesai,ditunda',
            'changed_by' => 'required|exists:users,id',
            'comment' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'task_id.required' => 'Task ID is required.',
            'status_from.required' => 'Status from is required.',
            'status_to.required' => 'Status to is required.',
            'changed_by.required' => 'Changed by user is required.',
        ];
    }
}

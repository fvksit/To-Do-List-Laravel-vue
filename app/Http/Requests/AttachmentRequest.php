<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttachmentRequest extends FormRequest
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
            'file_name' => 'required|string|max:255',
            'file_path' => 'required|string|max:255',
            'uploaded_by' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'task_id.required' => 'Task ID is required.',
            'file_name.required' => 'File name is required.',
            'file_path.required' => 'File path is required.',
        ];
    }
}

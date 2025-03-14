<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'comment_text' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'task_id.required' => 'Task ID is required.',
            'user_id.required' => 'User ID is required.',
            'comment_text.required' => 'Comment text is required.',
        ];
    }
}

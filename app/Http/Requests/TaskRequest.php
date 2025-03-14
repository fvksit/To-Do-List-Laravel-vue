<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
            'status' => 'required|in:belum selesai,selesai,ditunda',
            'priority' => 'required|in:rendah,sedang,tinggi',
            'assigned_to' => 'required|exists:users,id',
            'created_by' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required.',
            'description.required' => 'Description is required.',
            'due_date.required' => 'Due date is required.',
            'assigned_to.required' => 'Assigned user is required.',
            'created_by.required' => 'Creator user is required.',
        ];
    }
}

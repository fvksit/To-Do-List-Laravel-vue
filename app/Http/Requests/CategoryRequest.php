<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|string|max:255|unique:categories,category_name,' . ($this->category ? $this->category->id : ''),
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => 'Category name is required.',
            'category_name.unique' => 'This category name already exists.',
        ];
    }
}

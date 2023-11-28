<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestCreate extends FormRequest
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
    public function rules(): array
    {
        return [
            'classification' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'status' => 'required|boolean',
            'views' => 'required|integer',
        ];
    }
}

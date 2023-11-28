<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequestCreate extends FormRequest
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
            'title' => 'required|string',
            'body' => 'required|string',
            'published_at' => 'required|date',
            'category' => 'required|string',
            'source' => 'required|string',
            'author' => 'nullable|string',
            'url' => 'required|url',
            'image_url' => 'nullable|url',
            'summary' => 'nullable|string',
            'featured' => 'required|boolean',
            'views' => 'required|integer',
            'likes' => 'required|integer',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }
}

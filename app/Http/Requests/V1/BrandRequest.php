<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,',
            'logo' => 'nullable||mimes:png,jpg,jpeg,webp|between:300, 900',
            'banner' => 'nullable|mimes:png,jpg,jpeg,webp|between:300, 900',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];
    }
}
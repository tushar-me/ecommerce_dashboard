<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|integer',
            'updated_by' => 'nullable|integer',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'cover_image' => 'required|mimes:png,jpg,jpeg,webp|between:300, 900',
            'hover_image' => 'nullable|mimes:png,jpg,jpeg,webp|between:300, 900',
            'preview_video' => 'nullable|mimes:mp4',
            'video_url' => 'nullable|string',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'detail' => 'nullable|string',
            'specification' => 'nullable|string',
            'sku' => 'nullable|string',
            'stock' => 'nullable|integer',
            'bar_code' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
            'images' => 'nullable|string',
            'extra_details' => 'nullable|string',
        ];
    }
}

<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class ShippingAreaRequest extends FormRequest
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
            'name' => 'required|string',
            'area_code' => 'required|integer',
            'condition_price' => 'required|integer',
            'condition_charge' => 'required|integer',
            'delevery_charge' => 'required',
            'status' => 'required'
        ];
    }

    protected $stopOnFirstFailure = true;
}

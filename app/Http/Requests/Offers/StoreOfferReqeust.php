<?php

namespace App\Http\Requests\Offers;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfferReqeust extends FormRequest
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
            //
            "title" => "required|string",
            "description" => "required|string",
            "price" => "required|numeric",
            "months_valid" => "required|integer",            
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            "title.required" => "Title is required",
            "description.required" => "Description is required",
            "price.required" => "Price is required",
            "months_valid.required" => "Months valid is required",
        ];
    }
}

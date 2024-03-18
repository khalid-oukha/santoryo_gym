<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => ['string', 'max:255'],
            'description' => ['string', 'max:512'],
            'slug' => ['string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'], 
        ];
    }
    public function messages(){
        return [
            'name.string' => 'The name field is string.',
            'description.string' => 'The description field is string.',
            'slug.string' => 'The slug field is string.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The file must be a file of type: jpeg, png, jpg, gif.',
        ];
    }
}

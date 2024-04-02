<?php

namespace App\Http\Requests\Category;

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
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:512'],
            'slug' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif'], 
        ];
        
    }
    public function messages(){
        return [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
            'slug.required' => 'The slug field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The file must be a file of type: jpeg, png, jpg, gif.',
        ];
    }
}

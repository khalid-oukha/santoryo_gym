<?php

namespace App\Http\Requests\Coash;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoashRequest extends FormRequest
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
            'lastname' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'cin' => 'required|string|regex:/^[a-zA-Z]{2}[0-9]{6}$/',
            "specialization" => "required|string",
            "description" => "required|string",
            "status" => "required|in:avaliable,active",
            "gender" => "required|in:male,female",
            "image" => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function messages(){
        return [
            'cin.regex' => 'The CIN must be 2 letters followed by 6 numbers.',
            'image.required' => 'Please upload an image.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'description.required' => 'The text area field is required.',
            'status.required' => 'The status field is required',
            'lastname.required' => ' please enter last name ',
            'firstname.required' => ' please enter first name ',
            'email.required' => ' please enter email ',
            'password.required' => ' please enter password ',
            'cin.required' => ' please enter cin ',
            'specialization.required' => ' please enter specialization',
            'gender.required' => ' please select coach gender',
            
        ];
    }
}

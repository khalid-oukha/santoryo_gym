<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'lastname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email address! is required',
            'email.email' => 'email address not valide example@email.com',
            'email.unique' => 'you already have an account',
            'lastname.required' => 'We need to know your lastname !',
            'lastname.string' => 'first name not valide  numbers not allowed',
            'firstname.required' => 'We need to know your firstname !',
            'firstname.string' => 'firstname not valide  numbers not allowed',
            'password.required' => 'password required',
            'password.min' => 'password not strong enough !',
        ];
    }
}

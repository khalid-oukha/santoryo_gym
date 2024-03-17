<?php

namespace App\Http\Requests\Coash;

use Illuminate\Foundation\Http\FormRequest;

class CoachUpdateRequest extends FormRequest
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
            'lastname' => ['string', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'email' => ['string', 'email'],
            'password' => ['string', 'min:8'],
            'cin' => ['string', 'max:255'],
            'specialization' => ['string', 'max:255'],
            'description' => ['string'],
            'id' => ['string'],
            'coach_id' => ['string'],
        ];
    }

    public function messages(): array
    {
        return [
            'lastname.string' => 'Le nom doit être une chaine de caractères.',
            'lastname.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'firstname.string' => 'Le prénom doit être une chaine de caractères.',
            'firstname.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
            'email.string' => 'L\'email doit être une chaine de caractères.',
            'email.email' => 'L\'email doit être une adresse email valide.',
            'password.string' => 'Le mot de passe doit être une chaine de caractères.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'cin.string' => 'Le CIN doit être une chaine de caractères.',
            'cin.max' => 'Le CIN ne doit pas dépasser 255 caractères.',
            'specialization.string' => 'La spécialisation doit être une chaine de caractères.',
            'specialization.max' => 'La spécialisation ne doit pas dépasser 255 caractères.',
            'description.string' => 'La description doit être une chaine de caractères.',
        ];
    }
}

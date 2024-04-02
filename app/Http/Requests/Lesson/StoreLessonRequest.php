<?php

namespace App\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class StoreLessonRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'duration' => 'required|integer|min:1',
            'coach_id' => 'required|exists:coaches,id',
        ];
    }

    public function messages()
    {
        return [
            
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than :max characters.',

            'category_id.required' => 'The category field is required.',
            'category_id.exists' => 'The selected category is invalid.',

            'description.required' => 'The description field is required.',
            'description.string' => 'The description must be a string.',

            'capacity.required' => 'The capacity field is required.',
            'capacity.integer' => 'The capacity must be an integer.',
            'capacity.min' => 'The capacity must be at least :min.',

            'price.required' => 'The price field is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least :min.',

            'start_date.required' => 'The start date field is required.',
            'start_date.date' => 'The start date must be a valid date.',

            'start_time.required' => 'The start time field is required.',
            'start_time.date_format' => 'The start time must be a valid time in format HH:MM.',

            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: :values.',

            'duration.required' => 'The duration field is required.',
            'duration.integer' => 'The duration must be an integer.',
            'duration.min' => 'The duration must be at least :min.',

            'coach_id.required' => 'The coach field is required.',
            'coach_id.exists' => 'The selected coach is invalid.',
        ];
    }
}

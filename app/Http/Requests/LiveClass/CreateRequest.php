<?php

namespace App\Http\Requests\LiveClass;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'course_id' => 'required',
            'class_date' => 'required|string|min:2|max:255',
            'start_time' => 'required|string|max:255', 
            'end_time' => 'required|string|max:255', 
            'metting_link' => 'required|string|max:255', 
            'metting_platform' => 'required|string|max:255'
        ];
    }
}

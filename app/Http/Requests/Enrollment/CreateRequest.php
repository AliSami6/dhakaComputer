<?php

namespace App\Http\Requests\Enrollment;

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
            'student_id'=> ['required','integer'],
            'course_id'=> ['required'],
            'country'=>['required','string'],
            'state'=>['required','string'],
            'mobile_no'=>['required','numeric'],
            'email'=>['required','email','string'],
            'current_address'=>['required'],
            'studentID'=>['required','string']
        ];
    }
}

<?php

namespace App\Http\Requests\Registration;

use Illuminate\Support\Facades\Auth;
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
        $rules = [
            'applicantName' => 'nullable|string|max:255',
            'studentsName' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'fatherName' => 'nullable|string|max:255',
            'fatherOccupation' => 'nullable|string|max:255',
            'motherName' => 'nullable|string|max:255',
            'nationalId' => 'nullable',
            'occupation' => 'nullable',
            'education' => 'nullable',
            'address' => 'required',
            'motherOccupation' => 'nullable|string|max:255',
            'presentAddress' => 'nullable',
            'permanentAddress' => 'nullable',
            'contactNumber' => 'nullable|unique:users',
            'emailAddress' => 'nullable|string|email|unique:users',
            'dob' => 'nullable',
            'registrationNumber' => 'nullable',
            'race' => 'nullable',
            'gender' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'courseDay' => 'nullable|integer',
            'courseTime' => 'nullable|integer'
        ];

       
        return $rules;
    }

    /**
     * Get the custom validation messages for the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'applicantName.string' => 'Applicant Name is string',
            'studentsName.required' => 'Student Name is required',
            'city.required' => 'City  is required',
            'division.required' => 'Division is required',
            'country.required' => 'Country is required',
            'fatherName.string' => 'Father Name is string',
            'fatherOccupation.string' => 'Father Occupation is string',
            'motherName.string' => 'Mother Name is string',
            'motherOccupation.string' => 'Mother Occupation is string',
            'contactNumber.unique' => 'Contact Number already exists',
            'emailAddress.unique' => 'Email Address already exists'
        ];
    }
}

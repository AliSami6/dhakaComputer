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
            'applicantName' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'fatherName' => 'required|string|max:255',
            'fatherOccupation' => 'required|string|max:255',
            'motherName' => 'required|string|max:255',
            'nationalId' => 'required',
            'occupation' => 'required',
            'education' => 'required',
            'address' => 'required',
            'motherOccupation' => 'required|string|max:255',
            'contactNumber' => 'required|unique:users',
            'emailAddress' => 'required|string|email|unique:users',
            'registrationNumber' => 'required|string|max:255',
            'race' => 'required',
            'gender' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'courseDay' => 'required|integer',
            'courseTime' => 'required|integer'
        ];
    
        if (Auth::check()) {
            $nullableFields = [
                'fatherName', 'fatherOccupation', 'motherName', 
                'motherOccupation', 'nationalId', 'occupation', 
                'education', 'presentAddress', 'permanentAddress', 
                'contactNumber', 'emailAddress', 'dob', 
                'registrationNumber', 'race', 'gender', 
                'courseDay', 'courseTime'
            ];
            
            foreach ($nullableFields as $field) {
                $rules[$field] = 'nullable';
            }
        }
    
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
            'applicantName.required' => 'Applicant Name is required',
            'applicantName.string' => 'Applicant Name is string',
            'city.required' => 'City  is required',
            'registrationNumber.required' => 'Registration Number  is required',
            'nationalId.required' => 'National ID is required',
            'division.required' => 'Division is required',
            'country.required' => 'Country is required',
            'emailAddress.required' => 'Email is required',
            'fatherName.required' => 'Father Name is required',
            'fatherName.string' => 'Father Name is string',
            'fatherOccupation.required' => 'Father Occupation is required',
            'fatherOccupation.string' => 'Father Occupation is string',
            'motherName.required' => 'Mother Name is required',
            'contactNumber.required' => 'Contact Number is required',
            'motherName.string' => 'Mother Name is string',
            'motherOccupation.string' => 'Mother Occupation is string',
            'contactNumber.unique' => 'Contact Number already exists',
            'emailAddress.unique' => 'Email Address already exists'
        ];
    }
}

<?php

namespace App\Http\Requests\Batch;

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
            'batch_no' => 'required|string|min:2|max:255',
            'batch_code' => 'required|string|max:255', 
            'class_type' => 'required|string|max:255', 
            'class_start' => 'required|string|max:255', 
            'class_rutine' => 'required|string|max:255', 
            'class_time' => 'required|string|max:255', 
            'total_class' => 'required|integer', 
            'total_seat' => 'required|integer'
        ];
    }
}

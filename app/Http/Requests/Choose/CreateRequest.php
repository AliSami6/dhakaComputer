<?php

namespace App\Http\Requests\Choose;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'choose_image' => 'nullable|image',
            'choose_years' => 'required|integer',
            'choose_title' => 'required|string|min:2|max:255',
            'choose_subtitle' => 'required|string|min:2|max:255',
            'button_text' => 'nullable|string|min:2|max:100',
            'content_one' => 'nullable|string|min:2|max:100',
            'content_two' => 'nullable|string|min:2|max:100',
            'button_three' => 'nullable|string|min:2|max:100',
            'button_url' => 'nullable|url' 
        ];
    }
}
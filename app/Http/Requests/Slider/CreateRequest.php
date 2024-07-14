<?php

namespace App\Http\Requests\Slider;

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
            'slider_image' => 'nullable|image',
            'background_image' => 'nullable|image',
            'hero_title' => 'nullable|string|min:2|max:255',
            'hero_subtitle' => 'nullable|string|min:2|max:255',
            'hero_content' => 'nullable|string|min:2|max:255',
            'button_text' => 'nullable|string|min:2|max:100',
            'button_url' => 'nullable|url'
        ];
    }
}
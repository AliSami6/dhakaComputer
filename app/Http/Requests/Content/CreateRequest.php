<?php

namespace App\Http\Requests\Content;

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
            'train_title' => 'required|string|min:2|max:255',
            'train_description' => 'required|string|min:2|max:255',
            'train_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024'
        ];
    }
}
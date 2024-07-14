<?php

namespace App\Http\Requests\Settings;

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
            'site_name' => 'required|string',
            'site_email' => 'required|email|string|max:255',
            'site_copyright' => 'required|string|max:255',
            'website_title' => 'required|string|min:2|max:150',
            'website_description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg|max:1024'
        ];
    }
}

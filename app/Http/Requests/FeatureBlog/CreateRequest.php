<?php

namespace App\Http\Requests\FeatureBlog;

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
            'blog_feature_banner_title' => 'required|string|min:2|max:255',
            'blog_feature_banner_short_desc' => 'required',
            'blog_feature_banner_image' => 'required|image|mimes:jpeg,png,jpg,gif' 
        ];
    }
}

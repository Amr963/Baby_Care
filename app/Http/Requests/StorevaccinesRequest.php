<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorevaccinesRequest extends FormRequest
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
            'name' =>['required','string'],
            'description' =>['required','string'],
            'image_path_vaccines' =>['required','image'],
            'short_video_path_vaccines' =>['required','file'],
            'indication' =>['required','string'],
            'recommended_age' =>['required','string'],
            'guidelines' =>['required','string'],
            'injection_location' =>['required','string'],
        ];
    }
}

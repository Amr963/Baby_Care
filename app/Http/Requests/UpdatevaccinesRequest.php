<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatevaccinesRequest extends FormRequest
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
            'name' =>['string'],
            'description' =>['string'],
            'image_path_vaccines' =>['image'],
            'short_video_path_vaccines' =>['file'],
            'indication' =>['string'],
            'recommended_age' =>['string'],
            'guidelines' =>['string'],
            'injection_location' =>['string'],
        ];
    }
}

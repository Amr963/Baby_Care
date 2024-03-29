<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChild_ProgressRequest extends FormRequest
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
            'month' =>['required','string'],
            'abdominal_recumbency'=>['required','string'],
            'dorsal_recumbency'=>['required','string'],
            'visual_development'=>['required','string'],
            'social'=>['required','string'],
            'sitting'=>['required','string'],
            'stand_up'=>['required','string'],
            'adaptation'=>['required','string'],
            'movement'=>['required','string'],
            'language'=>['required','string'],
        ];
    }
}

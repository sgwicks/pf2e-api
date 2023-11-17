<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterSavingThrowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fortitude' => [
                'integer',
                Rule::in(0,2,4,6,8)
            ],
            'reflex' => [
                'integer',
                Rule::in(0,2,4,6,8)
            ],
            'will' => [
                'integer',
                Rule::in(0,2,4,6,8)
            ]
        ];
    }
}

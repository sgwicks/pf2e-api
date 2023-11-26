<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterProficiencyRequest extends FormRequest
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
            'unarmoured' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'light' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'medium' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'heavy' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'unarmed' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'simple' => ['integer', Rule::in(0, 2, 4, 6, 8)],
            'martial' => ['integer', Rule::in(0, 2, 4, 6, 8)]
        ];
    }
}

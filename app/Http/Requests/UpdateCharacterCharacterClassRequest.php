<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterCharacterClassRequest extends FormRequest
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
            'level' => ['required', 'integer'],
            'key_ability' => [
                'sometimes',
                Rule::in(['strength','dexterity','constitution','intelligence','wisdom','charisma'])
            ]
        ];
    }
}

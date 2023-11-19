<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterHealthRequest extends FormRequest
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
            'max' => 'integer',
            'current' => 'integer',
            'temporary' => 'integer',
            'dying' => 'integer',
            'wounded' => 'integer',
            'resistances' => 'array',
            'weaknesses' => 'array',
            'immunities' => 'array',
            'conditions' => 'array',
        ];
    }
}

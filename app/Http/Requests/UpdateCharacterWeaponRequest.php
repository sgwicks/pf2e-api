<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterWeaponRequest extends FormRequest
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
            'category' => ['string', Rule::in('U', 'S', 'M', 'A')],
            'range' => ['integer'],
            'damage_die_type' => ['integer', Rule::in(4, 6, 8, 10, 12)],
            'damage_die_amount' => ['integer'],
            'damage_type' => ['string', Rule::in('B', 'S', 'P')],
            'hands' => ['integer', Rule::in(0, 1, 2)],
            'reload' => ['integer'],
            'price' => ['integer'],
            'bulk' => ['integer'],
            'group' => ['string'],
            'traits' => ['array'],
        ];
    }
}

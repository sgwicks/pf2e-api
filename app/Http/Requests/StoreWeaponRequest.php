<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreWeaponRequest extends FormRequest
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
            'name' => ['string', 'required'],
            'hardness' => ['integer'],
            'max_hp' => ['integer'],
            'break_threshold' => ['integer'],
            'bulk' => ['integer'],
            'price' => ['integer'],
            'category' => ['string', 'required', Rule::in('U', 'S', 'M', 'A')],
            'range' => ['integer'],
            'damage_die_type' => ['integer', Rule::in(4, 6, 8, 10, 12)],
            'damage_die_amount' => ['integer'],
            'damage_type' => ['string', Rule::in('B', 'S', 'P')],
            'reload' => ['integer'],
            'hands' => ['integer', Rule::in(0, 1, 2)],
            'group' => ['string', 'required'],
            'traits' => ['array']
        ];
    }
}

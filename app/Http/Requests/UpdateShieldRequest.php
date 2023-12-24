<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShieldRequest extends FormRequest
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
            'name' => ['string'],
            'hardness' => ['integer'],
            'max_hp' => ['integer'],
            'break_threshold' => ['integer'],
            'price' => ['float'],
            'bulk' => ['float'],
            'armour_class' => ['integer']
        ];
    }
}

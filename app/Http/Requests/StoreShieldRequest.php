<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShieldRequest extends FormRequest
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
            'price' => ['numeric'],
            'bulk' => ['numeric'],
            'armour_class' => ['integer']
        ];
    }
}

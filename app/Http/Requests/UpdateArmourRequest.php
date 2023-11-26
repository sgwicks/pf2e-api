<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArmourRequest extends FormRequest
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
            'category' => [
                'string',
                Rule::in('unarmoured', 'light', 'medium', 'heavy')
            ],
            'price' => 'numeric',
            'armour_class' => 'integer',
            'dex_cap' => ['integer', 'nullable'],
            'check_penalty' => ['integer'],
            'speed_penalty' => ['integer'],
            'strength' => ['integer'],
            'bulk' => ['numeric'],
            'group' => ['string'],
            'traits' => ['array'],
            'traits.*' => ['string']
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'category' => strtolower($this->category),
            'group' => strtolower($this->group)
        ]);
    }
}

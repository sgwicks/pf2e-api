<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreArmourRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'category' => [
                'required',
                'string',
                Rule::in('U', 'L', 'M', 'H')
            ],
            'price' => 'numeric',
            'armour_class' => 'integer',
            'dex_cap' => ['integer', 'nullable'],
            'check_penalty' => ['integer'],
            'speed_penalty' => ['integer'],
            'strength' => ['integer'],
            'bulk' => ['numeric'],
            'group' => ['sometimes', 'string'],
            'traits' => ['sometimes', 'array'],
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

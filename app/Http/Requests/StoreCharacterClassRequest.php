<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCharacterClassRequest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\CharacterClass,name'],
            'key_ability' => ['required', 'array'],
            'key_ability.*' => Rule::in('strength', 'dexterity', 'constitution', 'intelligence', 'wisdom', 'charisma'),
            'hit_points' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            'name' => strtolower(str_replace(' ', '_', $this->name))
        ]);
    }
}

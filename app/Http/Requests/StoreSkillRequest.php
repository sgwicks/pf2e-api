<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSkillRequest extends FormRequest
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
            'name' => ['required','unique:App\Models\Skill,name'],
            'ability' => [
                'required',
                Rule::in(['strength', 'dexterity', 'constitution', 'intelligence', 'wisdom', 'charisma'])
            ],
            'armour' => 'boolean'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strtolower(str_replace(' ', '_', $this->name)),
            'ability' => strtolower($this->ability)
        ]);
    }
}

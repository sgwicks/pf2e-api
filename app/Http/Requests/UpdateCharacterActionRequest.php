<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterActionRequest extends FormRequest
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
            'description' => 'string',
            'action' => ['string', Rule::in('bonus', 'single', 'double', 'triple', 'reaction')],
            'traits' => 'array',
            'source_book' => ['string', 'required_with:source_page'],
            'source_page' => ['integer', 'required_with:source_book'],
            'trigger' => 'string',
            'is_spell' => 'boolean',
            'components' => 'array',
        ];
    }
}

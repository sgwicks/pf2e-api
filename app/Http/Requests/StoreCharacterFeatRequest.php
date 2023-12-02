<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCharacterFeatRequest extends FormRequest
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
            'name' => 'required_without:feat_id',
            'feat_id' => 'required_without:name',
            'chosen_level' => ['required', 'integer'],
            'type' => ['required', 'string', Rule::in('G', 'S', 'A', 'C', 'B')]
        ];
    }
}

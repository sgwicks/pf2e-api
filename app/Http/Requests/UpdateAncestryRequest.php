<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAncestryRequest extends FormRequest
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
            'name' => 'unique:App\Models\Ancestry,name'
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->name) {
            $this->merge([
                'name' => strtolower(str_replace(' ', '_', $this->name))
            ]);
        }
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBackgroundRequest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\Background,name']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strtolower(str_replace(' ', '_', $this->name))
        ]);
    }
}

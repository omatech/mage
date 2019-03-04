<?php

namespace Omatech\Mage\App\Http\Requests\Roles;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRequest extends FormRequest
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
            'roles_name' => [
                'required',
                Rule::unique('roles', 'name')
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'roles_name.required' => __('mage.roles.validations.name.required'),
            'roles_name.unique' => __('mage.roles.validations.name.unique')
        ];
    }
}

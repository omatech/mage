<?php

namespace Omatech\Mage\App\Http\Requests\Permissions;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'permissions_name' => [
                'required',
                Rule::unique('permissions', 'name')->ignore($this->id)
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
            'permissions_name.required' => __('mage.permissions.validations.name.required'),
            'permissions_name.unique' => __('mage.permissions.validations.name.unique')
        ];
    }}

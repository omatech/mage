<?php

namespace Omatech\Mage\App\Http\Requests\Users;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Omatech\Mage\App\Contracts\Users\UpdateRequestInterface;

class UpdateRequest extends FormRequest implements UpdateRequestInterface
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
            'users_name'     => 'required',
            'users_email'    => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($this->user)
            ],
            'users_language' => 'required',
            'users_roles'    => 'required'
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
            'users_name.required' => __('mage.users.validations.name.required'),
            'users_email.required' => __('mage.users.validations.email.required'),
            'users_email.email' => __('mage.users.validations.email.email'),
            'users_email.unique' => __('mage.users.validations.email.unique'),
            'users_language.required' => __('mage.users.validations.language.required'),
            'users_roles.required' => __('mage.users.validations.roles.required')
        ];
    }
}

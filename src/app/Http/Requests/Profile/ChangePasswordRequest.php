<?php

namespace Omatech\Mage\App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Omatech\Mage\App\Http\Requests\Rules\CheckPasswordHash;

class ChangePasswordRequest extends FormRequest
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
            'profile_password_current' => [
                'required',
                new CheckPasswordHash
            ],
            'profile_password_new' => [
                'required',
                'confirmed'
            ],
            'profile_password_new_confirmation' => [
                'required'
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
            'profile_password_current.required' => __('mage.profile.form.validations.password_current.required'),
            'profile_password_new.required' => __('mage.profile.form.validations.password_new.required'),
            'profile_password_new.confirmed' => __('mage.profile.form.validations.password_new.confirmed'),
            'profile_password_new_confirmation.required' => __('mage.profile.form.validations.password_new_confirmation.required')
        ];
    }
}

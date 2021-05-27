<?php

namespace Omatech\Mage\App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Omatech\Mage\App\Contracts\Profile\UpdateProfileRequestInterface;

class UpdateRequest extends FormRequest implements UpdateProfileRequestInterface
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
            'profile_name' => [
                'required'
            ]
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
            'profile_name.required' => __('mage.profile.form.validations.name.required')
        ];
    }
}

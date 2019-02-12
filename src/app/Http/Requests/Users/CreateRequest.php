<?php

namespace Omatech\Mage\App\Http\Requests\Users;

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
            'users_name'     => 'required',
            'users_email'    => [
                'required',
                'email',
                Rule::unique('users', 'email')
            ],
            'users_language' => 'required',
            'users_roles'    => 'required'
        ];
    }
}

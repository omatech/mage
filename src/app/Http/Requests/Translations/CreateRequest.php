<?php

namespace Omatech\Mage\App\Http\Requests\Translations;

use App\Rules\Translations\ExistsTranslationInGroupRule;
use Illuminate\Foundation\Http\FormRequest;

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
        $rules = [
            'translations_key'   => 'required',
            'translations_group' => 'required',
	    'translations_key' => new ExistsTranslationInGroupRole()
        ];

        foreach (config('mage.translations.available_locales') as $lang) {
            $lang = $lang['locale'];
            $rules["translations_text-$lang"] = 'nullable|string';
        }

        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'translations_key.required' => __('mage.translations.validations.key.required'),
            'translations_group.required' => __('mage.translations.validations.group.required')
        ];
    }
}

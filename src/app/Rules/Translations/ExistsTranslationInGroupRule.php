<?php

namespace App\Rules\Translations;

use Illuminate\Contracts\Validation\Rule;
use Omatech\Mage\App\Repositories\Translation\ExistsTranslation;

class ExistsTranslationInGroupRule implements Rule
{
    protected $existsTranslationRepository;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->existsTranslationRepository = new ExistsTranslation();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $translation = ['group' => request()->get('translations_group'), 'key' => request()->get('translations_key')];
        return !$this->existsTranslationRepository->make($translation);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('mage.translations.validations.key.unique');
    }
}

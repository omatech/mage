<?php

namespace Omatech\Mage\App\Repositories\Translation;

class AddMissingLanguagesToTranslations
{
    public function make($translations, $key)
    {
        $availableLanguages = config('mage.translations.available_locales');

        foreach ($availableLanguages as $currentLanguage) {
            if (empty($translations[$currentLanguage['locale']])) {
                $translations[$currentLanguage['locale']] = $key;
            }
        }

        return $translations;
    }
}

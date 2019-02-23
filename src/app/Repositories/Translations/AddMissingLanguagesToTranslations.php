<?php

namespace Omatech\Mage\App\Repositories\Translations;

class AddMissingLanguagesToTranslations
{
    public function make($translations, $key)
    {
        $availableLanguages = config('mage.available_langs');

        foreach($availableLanguages as $currentLanguage) {
            if(empty($translations[$currentLanguage])) {
                $translations[$currentLanguage] = $key;
            }
        }

        return $translations;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translations;

class RemoveOrphanLanguagesFromTranslations
{
    public function make($translations, $key)
    {
        $availableLanguages = config('mage.available_langs');
        $availableLanguages = array_fill_keys($availableLanguages, $key);

        $toRemove = array_diff(array_keys($translations), array_keys($availableLanguages));

        foreach($toRemove as $key) {
            unset($translations[$key]);
        }

        return $translations;
    }
}

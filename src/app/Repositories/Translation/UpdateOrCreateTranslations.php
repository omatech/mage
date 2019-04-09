<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class UpdateOrCreateTranslations extends TranslationBaseRepository
{
    private $getTranslationKey;
    private $removeOrphanLanguagesFromTranslations;
    private $addMissingLanguagesToTranslations;

    public function __construct(
        GetTranslationKey $getTranslationKey,
        RemoveOrphanLanguagesFromTranslations $removeOrphanLanguagesFromTranslations,
        AddMissingLanguagesToTranslations $addMissingLanguagesToTranslations
    ) {
        $this->getTranslationKey = $getTranslationKey;
        $this->removeOrphanLanguagesFromTranslations = $removeOrphanLanguagesFromTranslations;
        $this->addMissingLanguagesToTranslations = $addMissingLanguagesToTranslations;
    }

    private function parseTranslations($scannedTranslationsKeys)
    {
        $translations = [];

        foreach ($scannedTranslationsKeys as $groups) {
            foreach ($groups as $groupName => $group) {
                foreach ($group as $locale => $keys) {
                    foreach ($keys as $key => $text) {
                        $text = (is_array($text) || empty($text)) ? $groupName.'.'.$key : $text;

                        $translations[] = [
                            'group'  => $groupName,
                            'locale' => $locale,
                            'key'    => $key,
                            'text'   => $text
                        ];
                    }
                }
            }
        }

        return $translations;
    }

    public function make($scannedTranslationsKeys, $deleteOrphans = false)
    {
        $scannedTranslationsKeys = $this->parseTranslations($scannedTranslationsKeys);

        foreach ($scannedTranslationsKeys as $translationKey) {
            $mergedTranslation = [];

            $availableLanguages = [];
            foreach(config('mage.translations.available_locales') as $lang) {
                $availableLanguages[] = $lang['locale'];
            }

            $currentTranslation = array_fill_keys($availableLanguages, $translationKey['group'].'.'.$translationKey['key']);
            $currentTranslation[$translationKey['locale']] = $translationKey['text'];
            $currentDatabaseTranslation = $this->getTranslationKey->make($translationKey['group'], $translationKey['key']);
            
            if ($currentDatabaseTranslation) {
                foreach ($currentDatabaseTranslation->text as $locale => $value) {
                    $mergedTranslation[$locale] = $value;

                    if (isset($currentTranslation[$locale])) {
                        $key = $currentDatabaseTranslation->group.'.'.$currentDatabaseTranslation->key;
                        
                        if ($key == $value && $currentTranslation[$locale] != $key) {
                            $mergedTranslation[$locale] = $currentTranslation[$locale];
                        }
                    }
                }
                
                $currentTranslation = $this->addMissingLanguagesToTranslations->make($mergedTranslation, $key);

                if ($deleteOrphans) {
                    $currentTranslation = $this->removeOrphanLanguagesFromTranslations->make($currentTranslation, $key);
                }
            }

            $this->query()->updateOrCreate([
                'group' => $translationKey['group'],
                'key' => $translationKey['key'],
            ], [
                'text' => $currentTranslation
            ]);
        }
    }
}

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
                    foreach($keys as $key => $text) {

                        $text = (is_array($text) || empty($text)) ? '__NOT TRANSLATED__' : $text;

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
            $currentTranslation = array_fill_keys(config('mage.available_locales'), '__NOT TRANSLATED__');

            $currentTranslation[$translationKey['locale']] = $translationKey['text'];

            $currentTranslationKey = $this->getTranslationKey->make($translationKey['group'], $translationKey['key']);

            if ($currentTranslationKey) {
                $currentTranslation = $currentTranslationKey->text;
                $currentTranslation = $this->addMissingLanguagesToTranslations->make($currentTranslation, $translationKey['key']);

                if ($deleteOrphans) {
                    $currentTranslation = $this->removeOrphanLanguagesFromTranslations->make($currentTranslation, $translationKey['key']);
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

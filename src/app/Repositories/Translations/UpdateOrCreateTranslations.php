<?php

namespace Omatech\Mage\App\Repositories\Translations;

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
                foreach ($group as $key => $value) {
                    $translations[] = [
                        'group' => $groupName,
                        'key' => $key,
                    ];
                }
            }
        }

        return $translations;
    }

    public function make($scannedTranslationsKeys, $deleteOrphans = false)
    {
        $scannedTranslationsKeys = $this->parseTranslations($scannedTranslationsKeys);

        foreach ($scannedTranslationsKeys as $translationKey) {
            $currentTranslation = array_fill_keys(config('mage.available_langs'), '__NOT TRANSLATED__');
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

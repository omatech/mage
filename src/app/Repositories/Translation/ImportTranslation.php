<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Rap2hpoutre\FastExcel\FastExcel;

class ImportTranslation
{
    private $findTranslation;
    private $saveTranslation;

    public function __construct(
        FindTranslation $findTranslation,
        SaveTranslation $saveTranslation
    ) {
        $this->findTranslation = $findTranslation;
        $this->saveTranslation = $saveTranslation;
    }

    public function make(string $path, string $locale = '')
    {
        $translations = $this->import($path, $locale);

        foreach($translations as $translation) {
            $current = $this->findTranslation->find(['key' => $translation['key']]);
            $translation['id'] = $current['id'] ?? null;

            $translation = $this->setMissingTranslations($translation);
            $this->saveTranslation->make($translation);
        }
    }

    public function import(string $path, string $locale = '') : array
    {
        $sheets = $this->importSheets($path, $locale);

        if ($sheets === []) {
            return [];
        }

        return $this->parseTranslations($sheets);
    }

    /**
     * @param string $path
     * @param string $locale
     * @return array
     */
    private function importSheets(string $path, string $locale = '') : array
    {
        $sheets = (new FastExcel)->withSheetsNames()->importSheets($path)->toArray();
        $sheetNames = array_keys($sheets);

        if($locale !== '' && in_array($locale, $sheetNames)) {
            return [$locale => $sheets[$locale]];
        } elseif ($sheetNames > 1) {
            return $sheets;
        }

        return [];
    }

    private function parseTranslations(array $sheets) : array
    {
        $translations = [];
        $parsedKeys = [];

        foreach ($sheets as $lang => $trans) {
            $translations[$lang] = $trans;
        }

        foreach ($translations as $lang => $keys) {
            foreach ($keys as $key) {
                if ('' != $key['key2']) {
                    $parsedKeys[$key['key2']]['key'] = $key['key2'];
                    $parsedKeys[$key['key2']]['value'][$lang] = $key['value'];
                }
            }
        }

        return array_values($parsedKeys);
    }

    private function getLocales() : array
    {
        $availableLocales = config('mage.translations.available_locales');
        $locales = [];

        foreach ($availableLocales as $locale) {
            if (! array_key_exists($locale['locale'], $locales)) {
                $locales[] = $locale['locale'];
            }
        }

        return $locales;
    }

    /**
     * @return void
     */
    private function setMissingTranslations($translation) : array
    {
        foreach ($this->getLocales() as $locale) {
            if (! array_key_exists($locale, $translation['value'])) {
                $translation['value'][$locale] = $translation['key'];
            }
        }
        return $translation;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Box\Spout\Common\Type;
use Box\Spout\Reader\ReaderFactory;
use Rap2hpoutre\FastExcel\FastExcel;

class ImportTranslation
{
    private $findTranslation;
    private $saveTranslation;

    public function __construct(
        FindTranslation $findTranslation,
        SaveTranslation $saveTranslation
    )
    {
        $this->findTranslation = $findTranslation;
        $this->saveTranslation = $saveTranslation;
    }

    public function make(string $path, string $locale = '')
    {
        $translations = $this->import($path, $locale);

        foreach ($translations as $translation) {
            $current = $this->findTranslation->find(['key' => $translation['key']]);
            $translation['id'] = $current['id'] ?? null;
            $translation = $this->setMissingTranslations($translation, $current['value']);
            $this->saveTranslation->make($translation);
        }
    }

    public function import(string $path, string $locale = ''): array
    {
        $sheetNames = $this->getSheets($path, $locale);
        $sheets = $this->importSheets($path, $sheetNames);

        if (count($sheetNames) <= 0) {
            return [];
        }

        return $this->parseTranslations($sheetNames, $sheets);
    }

    /**
     * @param string $path
     * @param string $locale
     * @return array
     */
    private function getSheets(string $path, string $locale = ''): array
    {
        $sheetNames = [];

        $reader = ReaderFactory::create(Type::XLSX);
        $reader->open($path);

        foreach ($reader->getSheetIterator() as $sheet) {
            array_push($sheetNames, $sheet->getName());
        }

        if ('' != $locale && in_array($locale, $sheetNames)) {
            $sheetNames = [0 => $locale];
        } elseif ('' != $locale && !in_array($locale, $sheetNames)) {
            $sheetNames = [];
        }

        return $sheetNames;
    }

    /**
     * @param string $path
     * @param array $sheetNames
     * @return array
     */
    private function importSheets(string $path, array $sheetNames): array
    {
        $sheets = new FastExcel;

        if (count($sheetNames) > 1) {
            return $sheets->importSheets($path)->toArray();
        }

        return [$sheets->sheet(key($sheetNames) + 1)->import($path)->toArray()];
    }

    private function parseTranslations(array $sheetNames, array $sheets): array
    {
        $translations = [];
        $parsedKeys = [];

        foreach ($sheets as $lang => $trans) {
            $translations[$sheetNames[$lang]] = $trans;
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

    private function getLocales(): array
    {
        $availableLocales = config('mage.translations.available_locales');
        $locales = [];

        foreach ($availableLocales as $locale) {
            if (!array_key_exists($locale['locale'], $locales)) {
                $locales[] = $locale['locale'];
            }
        }

        return $locales;
    }

    /**
     * @return void
     */
    private function setMissingTranslations($translation, array $defaultValues = []): array
    {
        foreach ($this->getLocales() as $locale) {
            if (!array_key_exists($locale, $translation['value'])) {
                if (!empty($defaultValues) && array_key_exists($locale, $defaultValues)) {
                    $translation['value'][$locale] = $defaultValues[$locale];
                } else {
                    $translation['value'][$locale] = $translation['key'];
                }
            }
        }

        return $translation;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Omatech\Mage\App\Contracts\Translation\ExportTranslationInterface;
use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

class ExportTranslations implements ExportTranslationInterface
{
    private $getAllTranslations;

    public function __construct(GetAllTranslations $getAllTranslations)
    {
        $this->getAllTranslations = $getAllTranslations;
    }

    public function make(): string
    {
        $translations = $this->getAllTranslations->get($this->getLocales());
        $parsedTranslations = [];

        foreach ($translations as $values) {
            foreach ($values as $key => $value) {
                if (array_key_exists($key, array_flip($this->getLocales()))) {
                    $value = (!empty($value)) ? $value : $values['group'] . '.' . $values['key'];
                    $parsedTranslations[$key][] = [
                        'group' => $values['group'],
                        'key' => $values['group'] . '.' . $values['key'],
                        'value' => $value,
                        'reference_value' => $values[app()->getLocale()],
                    ];
                }
            }
        }

        foreach ($parsedTranslations as &$translation) {
            $translation = collect($translation);
        }

        return $this->toFile($parsedTranslations);
    }

    private function toFile(array $translations): string
    {
        $path = base_path('storage/app/translations');
        File::makeDirectory($path, 0777, true, true);

        $date = Carbon::now('Europe/Madrid')->format('dmY_His');
        $path = storage_path('app/translations/' . $date . '_excel.xlsx');

        return (new FastExcel(new SheetCollection($translations)))->export($path, function ($sheets) {
            return [
                'key1' => 'mage',
                'key2' => $sheets['key'],
                'value' => $sheets['value'],
                'reference_value' => $sheets['reference_value'],
            ];
        });
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
}

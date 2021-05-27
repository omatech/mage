<?php

namespace Omatech\Mage\App\Excels;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TranslationsExport implements WithMultipleSheets
{
    private $language;

    public function __construct($language)
    {
        $this->language = $language;
    }

    public function sheets(): array
    {
        $sheets = [];

        if ($this->language) {
            $sheets[] = new TranslationsExportSheet($this->language);
        } else {
            foreach (config('mage.translations.available_locales') as $lang) {
                $lang = $lang['locale'];
                $sheets[] = new TranslationsExportSheet($lang);
            }
        }

        return $sheets;
    }
}

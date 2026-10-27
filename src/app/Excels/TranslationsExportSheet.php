<?php

namespace Omatech\Mage\App\Excels;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Omatech\Mage\App\Repositories\Translation\GetTranslations;

class TranslationsExportSheet implements FromArray, WithHeadings, WithMapping, WithTitle
{
    private $getTranslations;
    
    public function __construct(private $lang)
    {
        $this->getTranslations = new GetTranslations;
    }

    public function headings(): array
    {
        return [
            'key1',
            'key2',
            'value',
        ];
    }

    public function array(): array
    {
        return $this->getTranslations->make(null, $this->lang);
    }

    /**
     * @var Translation $translation
     */
    public function map($translation): array
    {
        return [
            'mage',
            $translation['key'],
            $translation['value'],
        ];
    }

    public function title(): string
    {
        return trans('mage.translations.language.'.$this->lang);
    }
}

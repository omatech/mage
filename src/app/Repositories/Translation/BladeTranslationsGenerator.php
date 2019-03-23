<?php

namespace Omatech\Mage\App\Repositories\Translation;

class BladeTranslationsGenerator
{
    private $getTranslations;

    public function __construct(GetTranslations $getTranslations)
    {
        $this->getTranslations = $getTranslations;
    }

    public function make()
    {
        $translations = $this->getTranslations->make();

        $arr = [];

        foreach ($translations as $translation) {
            $arr[$translation['key']] = $translation['value'];
        }

        return $this->generateJS($arr);
    }

    private function generateJS($trans)
    {
        $trans = json_encode($trans);

        return "<script type=\"text/javascript\">
            var Translations = $trans;
        </script>";
    }
}

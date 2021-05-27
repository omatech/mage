<?php

namespace Omatech\Mage\App\Contracts\Translation;

interface AllTranslationInterface
{
    /**
     * @param array $locales
     * @return mixed
     */
    public function get(array $locales);
}

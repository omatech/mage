<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Contracts\Translation\AllTranslationInterface;
use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class GetAllTranslations extends TranslationBaseRepository implements AllTranslationInterface
{
    /**
     * @param $locales
     * @return array
     */
    public function get(array $locales) : array
    {
        $select = ['id', 'group', 'key'];

        foreach ($locales as $locale) {
            $select[] = "text->$locale as $locale";
        }

        return $this->query()
            ->select($select)
            ->get()
            ->toArray();
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translations;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class GetTranslationKey extends TranslationBaseRepository
{
    public function make($group, $key)
    {
        return $this->query()
            ->where('group', $group)
            ->where('key', $key)
            ->first();
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translation;

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

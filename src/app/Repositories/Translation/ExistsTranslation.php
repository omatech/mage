<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class ExistsTranslation extends TranslationBaseRepository
{
    public function make($data)
    {
        return $this->query()
            ->where('group', $data['group'])
            ->where('key', $data['key'])
            ->exists();
    }
}

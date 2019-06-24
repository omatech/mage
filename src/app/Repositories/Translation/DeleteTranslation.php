<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class DeleteTranslation extends TranslationBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->where('id', $id)
            ->delete();
    }
}

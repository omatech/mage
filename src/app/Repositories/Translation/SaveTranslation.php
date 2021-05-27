<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class SaveTranslation extends TranslationBaseRepository
{
    public function make($translation)
    {
        $groupKey = explode('.', $translation['key'], 2);
        $trans = $this->query()->findOrNew($translation['id']);
        $trans->group = $groupKey[0];
        $trans->key = $groupKey[1];
        $trans->text = $translation['value'];
        $trans->save();
    }
}

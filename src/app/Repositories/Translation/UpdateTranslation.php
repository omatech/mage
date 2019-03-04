<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class UpdateTranslation extends TranslationBaseRepository
{
    public function make($id, $lang, $value)
    {
        $translation = $this->query()->find($id);

        $value = ($value == null) ? $value = '' : $value;

        $translation->forceFill(["text->$lang" => $value])
                    ->save();
    }
}

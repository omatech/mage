<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class CreateTranslation extends TranslationBaseRepository
{
    public function make($data)
    {
        $model = $this->model();
        $translation = (new $model);

        return $translation->forceFill($data)->save();
    }
}

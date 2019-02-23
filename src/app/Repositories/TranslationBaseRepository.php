<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Translation;

abstract class TranslationBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Translation::class;
    }
}

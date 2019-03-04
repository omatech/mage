<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class GetTranslations extends TranslationBaseRepository
{
    public function make()
    {
        $lang = app()->getLocale();

        return $this->query()
            ->select(DB::raw("CONCAT(`group`, '.', `key`) as 'key'"), "text->$lang as text")
            ->get()
            ->toArray();
    }
}

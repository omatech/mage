<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Omatech\Mage\App\Repositories\TranslationBaseRepository;
use Illuminate\Support\Facades\DB;

class CountNotTranslatedTranslations extends TranslationBaseRepository
{
    public function make()
    {
        $query = $this->query();

        foreach(config('mage.translations.available_locales') as $lang) {
            $query->orWhereColumn(DB::raw("CONCAT(`group`, '.', `key`)"), '=', "text->$lang");
        }

       return $query->count();
    }
}

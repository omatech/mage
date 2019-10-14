<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class GetTranslations extends TranslationBaseRepository
{
    public function make($group = null, $lang = null)
    {
        $lang = $lang ?? app()->getLocale();

        $query = $this->query()
            ->select(DB::raw("CONCAT(`group`, '.', `key`) as 'key'"), "text->$lang as value");

        if ($group) {
            $query = $query->where('group', $group);
        }

        $query = $query->get()
            ->toArray();

        return $query;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\TranslationBaseRepository;

class FindTranslation extends TranslationBaseRepository
{
    public function find(array $params)
    {
        $translation = $this->query()
            ->where(DB::raw("CONCAT(`group`, '.', `key`)"), $params['key'])
            ->first();

        if (null === $translation) {
            return [
                'key' => $params['key'],
                'id' => null,
            ];
        }

        return [
            'id' => $translation->id,
            'key' => $translation->group.'.'.$translation->key,
            'value' => $translation->text,
            'sync_at' => $translation->sync_at,
            'created_at' => $translation->created_at,
            'updated_at' => $translation->updated_at,
        ];

        return $translation;
    }
}

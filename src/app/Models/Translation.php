<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Spatie\TranslationLoader\LanguageLine;

#[\Illuminate\Database\Eloquent\Attributes\Table(name: 'language_lines')]
class Translation extends LanguageLine
{
    public static function getTranslationsForGroup(string $locale, string $group) : array
    {
        return Cache::rememberForever(static::getCacheKey($group, $locale), fn() => static::query()
            ->where('group', $group)
            ->get()
            ->reduce(function ($lines, LanguageLine $languageLine) use ($locale) {
                $translation = $languageLine->getTranslation($locale);
                if ($translation !== null) {
                    Arr::set($lines, $languageLine->key, $translation);
                    if ($lines !== null) {
                        $lines = Arr::dot($lines);
                    }
                }

                return $lines;
            }) ?? []);
    }
}

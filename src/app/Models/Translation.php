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
        $load = fn() => static::query()
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
            }) ?? [];

        return in_array($locale, static::cachedLocales(), true)
            ? Cache::rememberForever(static::getCacheKey($group, $locale), $load)
            : $load();
    }

    protected function getTranslatedLocales(): array
    {
        // A cached locale can have received fallback text from this row.
        return array_unique(array_merge(
            array_keys($this->text ?? []),
            array_keys($this->getOriginal('text') ?? []),
            static::cachedLocales(),
        ));
    }

    private static function cachedLocales(): array
    {
        return array_filter([
            ...array_column(config('mage.translations.available_locales', []), 'locale'),
            config('app.locale'),
            config('app.fallback_locale'),
        ], 'is_string');
    }
}

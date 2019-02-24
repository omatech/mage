<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Filesystem\Filesystem;

class FindTranslations
{
    private $disk;
    private $scanPaths;
    private $translationMethods;
    private $updateOrCreateTranslations;

    public function __construct(UpdateOrCreateTranslations $updateOrCreateTranslations)
    {
        $this->disk = new Filesystem;
        $this->scanPaths = config('mage.translation.scan_paths');
        $this->translationMethods = config('mage.translation.scan_functions');
        $this->updateOrCreateTranslations = $updateOrCreateTranslations;
    }

    public function make()
    {
        $results = ['single' => [], 'group' => []];
        // This has been derived from a combination of the following:
        // * Laravel Language Manager GUI from Mohamed Said (https://github.com/themsaid/laravel-langman-gui)
        // * Laravel 5 Translation Manager from Barry vd. Heuvel (https://github.com/barryvdh/laravel-translation-manager)
        $matchingPattern =
            '[^\w]'. // Must not start with any alphanum or _
            '(?<!->)'. // Must not start with ->
            '('.implode('|', $this->translationMethods).')'. // Must start with one of the functions
            "\(". // Match opening parentheses
            "[\'\"]". // Match " or '
            '('. // Start a new group to match:
            '.+'. // Must start with group
            ')'. // Close group
            "[\'\"]". // Closing quote
            "[\),]";  // Close parentheses or new parameter
        foreach ($this->disk->allFiles($this->scanPaths) as $file) {
            if (preg_match_all("/$matchingPattern/siU", $file->getContents(), $matches)) {
                foreach ($matches[2] as $key) {
                    if (preg_match("/(^[a-zA-Z0-9:_-]+([.][^\1)\ ]+)+$)/siU", $key, $arrayMatches)) {
                        list($file, $k) = explode('.', $arrayMatches[0], 2);
                        $results['group'][$file][app()->getLocale()][$k] = '';
                        continue;
                    } else {
                        $key = str_replace('/','.', $key);
                        $key = explode('.', $key);

                        $group = $key[0];
                        array_splice($key, 0, 1);

                        $key = join('.', $key);
                        $results['group'][$group][app()->getLocale()][$key] = '';
                    }
                }
            }
        }

        $this->updateOrCreateTranslations->make($results);
    }
}

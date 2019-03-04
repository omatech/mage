<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;

class ImportTranslations
{
    private $disk;
    private $scanPaths;
    private $updateOrCreateTranslations;

    public function __construct(UpdateOrCreateTranslations $updateOrCreateTranslations)
    {
        $this->disk = new Filesystem;
        $this->scanPaths = config('mage.translations.import_path');
        $this->updateOrCreateTranslations = $updateOrCreateTranslations;
    }

    public function make()
    {
        $results = [];

        foreach ($this->disk->allFiles($this->scanPaths) as $file) {
            $relativePath = $file->getRelativePath();
            $lang = explode('/', $relativePath)[0];

            $filename = $file->getFilename();
            $group = pathinfo($filename)['filename'];

            $keys = require_once $file->getPathname();
            $keys = Arr::dot($keys);

            $results['group'][$group][$lang] = $keys;
        }

        $this->updateOrCreateTranslations->make($results);
    }
}

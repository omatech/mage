<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Spatie\TranslationLoader\TranslationServiceProvider;

class SpatieTranslationServiceProvider extends TranslationServiceProvider
{
    public function boot()
    {
        parent::boot();

        $path = base_path('vendor/spatie/laravel-translation-loader/database/migrations/create_language_lines_table.php.stub');

        $this->publishes([
            $path => $this->getMigrationFileName(new Filesystem()),
        ], 'mage-publish');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/translation-loader.php',
            'translation-loader'
        );

        parent::register();
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     *
     * @param Filesystem $filesystem
     * @return string
     */
    private function getMigrationFileName(Filesystem $filesystem): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make($this->app->databasePath().DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR)
            ->flatMap(function ($path) use ($filesystem) {
                return $filesystem->glob($path.'*_create_language_lines_table.php');
            })->push($this->app->databasePath()."/migrations/{$timestamp}_create_language_lines_table.php")
            ->first();
    }
}

<?php

namespace Omatech\Mage\App\Providers;

use Spatie\TranslationLoader\TranslationServiceProvider;

class SpatieTranslationServiceProvider extends TranslationServiceProvider
{
    public function boot()
    {
        parent::boot();

        $path = base_path('vendor/spatie/laravel-translation-loader/database/migrations/create_language_lines_table.php.stub');

        $timestamp = date('Y_m_d_His', time());

        $this->publishes([
            $path => database_path('migrations/'.$timestamp.'_create_language_lines_table.php'),
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
}

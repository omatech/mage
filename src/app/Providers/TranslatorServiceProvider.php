<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Repositories\Translation\CustomTranslator;
use Spatie\LaravelPackageTools\Package;
use Spatie\TranslationLoader\TranslationServiceProvider;

class TranslatorServiceProvider extends TranslationServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translation-loader')
            ->hasConfigFile()
            ->setBasePath(__DIR__.'/../')
            ->hasMigrations('create_language_lines_table');

        $this->registerLoader();
        $this->registerTranslator();
    }

    /**
     * Register the translation line loader. This method registers a
     * `TranslationLoaderManager` instead of a simple `FileLoader` as the
     * applications `translation.loader` instance.
     */
    protected function registerTranslator(): void
    {
        $this->app->singleton('translator', function ($app) {
            $loader = $app['translation.loader'];

            $locale = $app['config']['app.locale'];

            $trans = new CustomTranslator($loader, $locale);

            $trans->setFallback($app['config']['app.fallback_locale']);

            return $trans;
        });
    }
}

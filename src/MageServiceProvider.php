<?php

namespace Omatech\Mage;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Providers\ViewServiceProvider;
use Omatech\Mage\App\Providers\HelperServiceProvider;
use Omatech\Mage\App\Providers\CommandServiceProvider;
use Omatech\Mage\App\Providers\PublishServiceProvider;
use Omatech\Mage\App\Providers\RoutingServiceProvider;
use Omatech\Mage\App\Providers\MiddlewareServiceProvider;
use Omatech\Mage\App\Providers\ConfigurationServiceProvider;
use Omatech\Mage\App\Providers\SpatiePermissionsServiceProvider;
use Omatech\Mage\App\Providers\SpatieTranslationServiceProvider;
use Spatie\TranslationLoader\TranslationServiceProvider;

class MageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application service providers.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(ConfigurationServiceProvider::class);
        $this->app->register(PublishServiceProvider::class);
        $this->app->register(ViewServiceProvider::class);
        $this->app->register(RoutingServiceProvider::class);
        $this->app->register(MiddlewareServiceProvider::class);
        $this->app->register(HelperServiceProvider::class);
        $this->app->register(CommandServiceProvider::class);

        $this->app->register(SpatiePermissionsServiceProvider::class);

        $this->app->register(SpatieTranslationServiceProvider::class);
        $this->app->register(TranslationServiceProvider::class);

    }

    public function provides()
    {
        return ['mage'];
    }
}

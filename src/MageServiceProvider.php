<?php

namespace Omatech\Mage;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Providers\ExceptionServiceProvider;
use Omatech\Mage\App\Providers\MigrationServiceProvider;
use Omatech\Mage\App\Providers\PermissionServiceProvider;
use Omatech\Mage\App\Providers\ViewServiceProvider;
use Omatech\Mage\App\Providers\BladeServiceProvider;
use Omatech\Mage\App\Providers\HelperServiceProvider;
use Omatech\Mage\App\Providers\CommandServiceProvider;
use Omatech\Mage\App\Providers\PublishServiceProvider;
use Omatech\Mage\App\Providers\RoutingServiceProvider;
use Omatech\Mage\App\Providers\MiddlewareServiceProvider;
use Omatech\Mage\App\Providers\TranslatorServiceProvider;
use Omatech\Mage\App\Providers\ConfigurationServiceProvider;

class MageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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
        $this->app->register(PermissionServiceProvider::class);
        $this->app->register(MiddlewareServiceProvider::class);
        $this->app->register(HelperServiceProvider::class);
        $this->app->register(CommandServiceProvider::class);
        $this->app->register(TranslatorServiceProvider::class);
        $this->app->register(BladeServiceProvider::class);
        $this->app->register(MigrationServiceProvider::class);
        $this->app->register(ExceptionServiceProvider::class);
    }
}

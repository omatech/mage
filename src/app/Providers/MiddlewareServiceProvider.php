<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Omatech\Mage\App\Http\Middleware\CheckForPermissions;
use Omatech\Mage\App\Http\Middleware\RedirectIfAuthenticated;
use Omatech\Mage\App\Http\Middleware\RedirectIfNotAuthenticated;

class MiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot(HttpKernel $kernel)
    {
        $this->middlewares();
    }

    /**
     * Register the application middlewares.
     *
     * @return void
     */
    private function middlewares()
    {
        $this->app['router']->aliasMiddleware('mageRedirectIfAuthenticated', RedirectIfAuthenticated::class);
        $this->app['router']->aliasMiddleware('mageRedirectIfNotAuthenticated', RedirectIfNotAuthenticated::class);
        $this->app['router']->aliasMiddleware('checkForPermissions', CheckForPermissions::class);
    }
}

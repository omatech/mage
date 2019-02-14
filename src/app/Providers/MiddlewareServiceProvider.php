<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Http\Middleware\RedirectIfAuthenticated;
use Omatech\Mage\App\Http\Middleware\RedirectIfNotAuthenticated;

class MiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
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
    }
}

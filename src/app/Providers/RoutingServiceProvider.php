<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->routing();
    }

    /**
     * Register the application routes.
     *
     * @return void
     */
    private function routing()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}

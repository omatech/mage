<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->views();
    }

    /**
     * Register the application views.
     *
     * @return void
     */
    private function views()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'mage');
    }
}

<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->helpers();
    }

    /**
     * Register the application middlewares.
     *
     * @return void
     */
    private function helpers()
    {
        $files = array_diff(scandir(__DIR__.'/../Helpers/'), array('..', '.'));

        foreach ($files as $file) {
            require_once __DIR__.'/../Helpers/'.$file;
        }
    }
}

<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigurationServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function register()
    {
        $this->configuration();
    }

    /**
     * Register configurations.
     *
     * @return void
     */
    private function configuration()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/mage.php',
            'mage'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../../config/translation-loader.php',
            'translation-loader'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../../config/permission.php',
            'permission'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../../config/auth.providers.php',
            'auth.providers'
        );

        $this->mergeConfigFrom(
            __DIR__.'/../../config/auth.guards.php',
            'auth.guards'
        );
    }
}

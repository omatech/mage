<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class PublishServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->configuration();
        $this->assets();
        $this->fonts();
        $this->views();
    }

    /**
     * Publish configurations.
     *
     * @return void
     */
    private function configuration()
    {
        $this->publishes([
            __DIR__.'/../../config/mage.php' => config_path('mage.php'),
        ], 'mage-publish');

        $this->publishes([
            __DIR__.'/../../config/ziggy.php' => config_path('ziggy.php'),
        ], 'mage-publish');
    }

    private function assets()
    {
        $this->publishes([
            __DIR__.'/../../resources/dist/mage.js' => public_path('vendor/mage/mage.js'),
            __DIR__.'/../../resources/dist/mage.css' => public_path('vendor/mage/mage.css'),
            __DIR__.'/../../resources/dist/mix-manifest.json' => public_path('vendor/mage/mix-manifest.json'),
            __DIR__.'/../../resources/images/' => public_path('vendor/mage/images/'),
            __DIR__.'/../../resources/dist/images/' => public_path('images/'),
        ], 'mage-publish');

        $this->publishes([
            __DIR__.'/../../resources/dist/mage.js' => public_path('vendor/mage/mage.js'),
            __DIR__.'/../../resources/dist/mage.css' => public_path('vendor/mage/mage.css'),
            __DIR__.'/../../resources/dist/mix-manifest.json' => public_path('vendor/mage/mix-manifest.json'),
            __DIR__.'/../../resources/images/' => public_path('vendor/mage/images/'),
            __DIR__.'/../../resources/dist/images/' => public_path('images/'),
        ], 'mage-assets');
    }

    private function fonts()
    {
        $this->publishes([
            __DIR__.'/../../resources/dist/fonts' => public_path('fonts'),
        ], 'mage-publish');

        $this->publishes([
            __DIR__.'/../../resources/dist/fonts' => public_path('fonts'),
        ], 'mage-assets');
    }

    private function views()
    {
        $this->publishes([
            __DIR__.'/../../resources/views/assets' => resource_path('views/vendor/mage/assets'),
            __DIR__.'/../../resources/views/components/sidebar/sections/extends' => resource_path('views/vendor/mage/components/sidebar/sections/extends'),
            __DIR__.'/../../resources/views/components/sidebar/logo.blade.php' => resource_path('views/vendor/mage/components/sidebar/logo.blade.php'),
            __DIR__.'/../../resources/views/components/favicon.blade.php' => resource_path('views/vendor/mage/components/favicon.blade.php'),
            __DIR__.'/../../resources/views/components/navbar/layout.blade.php' => resource_path('views/vendor/mage/components/navbar/layout.blade.php'),
            __DIR__.'/../../resources/views/components/annotation.blade.php' => resource_path('views/vendor/mage/components/annotation.blade.php'),
            __DIR__.'/../../resources/views/components/timeline.blade.php' => resource_path('views/vendor/mage/components/timeline.blade.php'),
            __DIR__.'/../../resources/views/components/vault.blade.php' => resource_path('views/vendor/mage/components/vault.blade.php'),
            __DIR__.'/../../resources/views/pages/auth' => resource_path('views/vendor/mage/pages/auth'),
            __DIR__.'/../../resources/views/pages/dashboard' => resource_path('views/vendor/mage/pages/dashboard'),
            __DIR__.'/../../resources/views/layout/auth.blade.php' => resource_path('views/vendor/mage/layout/auth.blade.php'),
        ], 'mage-publish');
    }
}

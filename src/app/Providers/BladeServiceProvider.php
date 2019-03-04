<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Repositories\Translation\BladeTranslationsGenerator;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['blade.compiler']->directive('translations', function () {
            return "<?php echo app('" . BladeTranslationsGenerator::class . "')->make(); ?>";
        });
    }
}
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

        $this->app['blade.compiler']->directive('t', function ($expression) {
            return "<?php echo app('translator')->insertTransValue({$expression}); ?>";
        });


        $this->app['blade.compiler']->directive('can', function ($expression) {
            $segments = explode(',', preg_replace("/[\(\)\\\"\']/", '', $expression));

            $expression = trim($segments[0]);
            $guard = trim($segments[1] ?? config('auth.defaults.guard'));

            return "<?php if (auth()->guard('{$guard}')->check() && auth()->guard('{$guard}')->user()->can('{$expression}')): ?>";
        });

        $this->app['blade.compiler']->directive('elsecan', function ($expression) {
            $segments = explode(',', preg_replace("/[\(\)\\\"\']/", '', $expression));

            $expression = trim($segments[0]);
            $guard = trim($segments[1] ?? config('auth.defaults.guard'));

            return "<?php elseif (auth()->guard('{$guard}')->check() && auth()->guard('{$guard}')->user()->can('{$expression}')): ?>";
        });
    }
}

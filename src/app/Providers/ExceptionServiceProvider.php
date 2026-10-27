<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Exceptions\CustomHandler;

class ExceptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $appExceptionHandler = $this->app->make(ExceptionHandlerContract::class);

        $this->app->singleton(
            fn($app): \Illuminate\Contracts\Debug\ExceptionHandler => new CustomHandler($app, $appExceptionHandler)
        );
    }
}

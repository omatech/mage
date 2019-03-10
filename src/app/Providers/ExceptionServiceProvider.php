<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Exceptions\CustomHandler;
use Illuminate\Contracts\Debug\ExceptionHandler;

class ExceptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ExceptionHandler::class, CustomHandler::class);
    }
}

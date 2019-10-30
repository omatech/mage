<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Repositories\User\CreateUser;
use Omatech\Mage\App\Contracts\Users\CreateUserInterface;
use Omatech\Mage\App\Repositories\User\UpdateUserAssignRoles;
use Omatech\Mage\App\Contracts\Users\UpdateUserAssignRolesInterface;

class BindingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UpdateUserAssignRolesInterface::class, UpdateUserAssignRoles::class);
        $this->app->bind(CreateUserInterface::class, CreateUser::class);
    }
}

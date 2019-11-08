<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Repositories\User\CreateUser;
use Omatech\Mage\App\Http\Requests\Users\CreateRequest;
use Omatech\Mage\App\Http\Requests\Users\UpdateRequest;
use Omatech\Mage\App\Http\Requests\Profile\UpdateRequest as ProfileUpdateRequest;
use Omatech\Mage\App\Contracts\Users\CreateUserInterface;
use Omatech\Mage\App\Contracts\Users\CreateRequestInterface;
use Omatech\Mage\App\Contracts\Users\UpdateRequestInterface;
use Omatech\Mage\App\Repositories\User\UpdateUserAssignRoles;
use Omatech\Mage\App\Contracts\Users\UpdateUserAssignRolesInterface;
use Omatech\Mage\App\Contracts\Profile\UpdateProfileRequestInterface;

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
        $this->app->bind(CreateRequestInterface::class, CreateRequest::class);
        $this->app->bind(UpdateRequestInterface::class, UpdateRequest::class);
        $this->app->bind(UpdateProfileRequestInterface::class, ProfileUpdateRequest::class);
    }
}

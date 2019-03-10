<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole(config('mage.authentication.god_role')) ? true : null;
        });
    }
}

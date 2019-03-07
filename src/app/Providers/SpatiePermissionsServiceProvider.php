<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Filesystem\Filesystem;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\PermissionServiceProvider;

class SpatiePermissionsServiceProvider extends PermissionServiceProvider
{
    public function boot(PermissionRegistrar $permissionLoader, Filesystem $filesystem)
    {
        parent::boot($permissionLoader, $filesystem);

        $path = base_path('vendor/spatie/laravel-permission/database/migrations/create_permission_tables.php.stub');

        $this->publishes([
            $path => $this->getMigrationFileName($filesystem),
        ], 'mage-publish');


        Gate::before(function ($user, $ability) {
            return $user->hasRole(config('mage.authentication.god_role')) ? true : null;
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/permission.php',
            'permission'
        );

        parent::register();
    }
}

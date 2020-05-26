<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::namespace('Omatech\Mage\App\Http\Controllers')
    ->prefix(config('mage.prefix'))
    ->middleware(['web', 'setLocale', 'sidebarToggle'])
    ->name('mage.')
    ->group(function ($route) {

        /**
         * Auth
         */
        $route->namespace('Auth')
            ->middleware('mageRedirectIfAuthenticated')
            ->name('auth.')
            ->group(function ($auth) {
                $auth->get('login', 'LoginController@showLoginForm')->name('login.index');
                $auth->post('login', 'LoginController@login')->name('login');

                if (config('mage.enable_register_route')) {
                    $auth->get('register', 'RegisterController@showRegistrationForm')->name('register.index');
                    $auth->post('register', 'RegisterController@register')->name('register');
                }

                $auth->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
                $auth->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
                $auth->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
                $auth->post('password/reset', 'ResetPasswordController@reset')->name('password.update');
            });

        if (env('APP_ENV') != 'prod') {
            $route->post('translations/add', 'TranslationController@add')->name('translations.add');
        }

        /**
         * LoggedIn Routes
         */
        $route->middleware(['mageRedirectIfNotAuthenticated', 'checkForPermissions:mage-access'])
        
            ->group(function ($logged) {
              
                /*
                 * Dashboard
                 */
                $logged->get('/', 'DashboardController@index')->name('dashboard');

                /*
                 * Jobs
                 */
                Route::prefix('jobs')
                ->group(function ($route) {
                    // $route->middleware('checkForPermissions:backend-access-jobs')->group(function ($route) {
                        $route->get('/', 'Mage\JobsController@index')->name('backend.jobs.index');
                        $route->get('/done', 'Mage\JobsController@indexJobsDone')->name('backend.jobs.index-jobs-done');
                        $route->get('/failed', 'Mage\JobsController@indexJobsFailed')->name('backend.jobs.index-jobs-failed');

                        $route->get('/list', 'Mage\JobsController@list')->name('backend.jobs.list');
                        $route->get('/listDone', 'Mage\JobsController@listDone')->name('backend.jobs-done.list');
                        $route->get('/listFailed', 'Mage\JobsController@listFailed')->name('backend.jobs-failed.list');
                    // });
                });

                /*
                 * Activity-Logs
                 */
                Route::prefix('activity-logs')
                ->group(function ($route) {
                    // $route->middleware('checkForPermissions:backend-access-activity-logs')->group(function ($route) {
                        $route->get('/', 'Mage\ActivityLogsController@index')->name('backend.activity-logs.index');
                        $route->get('/list', 'Mage\ActivityLogsController@list')->name('backend.activity-logs.list');
                    // });
                });

                /*
                 * Logout
                 */
                $logged->get('logout', 'Auth\LoginController@logout')->name('auth.logout');

                /*
                 * Profile
                 */
                $logged->get('profile', 'ProfileController@index')->name('profile.show');
                $logged->get('profile/change-password', 'ProfileController@changePasswordShow')->name('profile.change-password.index');
                $logged->post('profile/change-password', 'ProfileController@changePassword')->name('profile.change-password.post');
                $logged->put('profile', 'ProfileController@update')->name('profile.update');

                /**
                 * Users
                 */
                $logged->middleware('checkForPermissions:mage-access-users-zone')
                    ->group(function ($users) {
                        $users->get('users/list', 'UserController@list')->name('users.list');
                        $users->resource('users', 'UserController');
                    });

                /**
                 * Roles
                 */
                $logged->middleware('checkForPermissions:mage-access-roles-zone')
                    ->group(function ($roles) {
                        $roles->get('roles/list', 'RolController@list')->name('roles.list');
                        $roles->post('roles/{id}/permissions', 'RolController@assignPermissions')->name('roles.permissions.assign');
                        $roles->resource('roles', 'RolController');
                    });

                /**
                 * Permissions
                 */
                $logged->middleware('checkForPermissions:mage-access-permissions-zone')
                    ->group(function ($permissions) {
                        $permissions->get('permissions/list', 'PermissionController@list')->name('permissions.list');
                        $permissions->resource('permissions', 'PermissionController');
                    });

                /**
                 * Translations
                 */
                $logged->middleware('checkForPermissions:mage-access-translations-zone')
                    ->group(function ($translations) {
                        $translations->get('translations/list', 'TranslationController@list')->name('translations.list');
                        $translations->get('translations/set/{lang}', 'TranslationController@set')->name('translations.set');
                        $translations->resource('translations', 'TranslationController');
                    });

                /*
                 * Sidebar
                 */
                $logged->post('sidebar/toggle', 'SidebarController@toggle')->name('sidebar.toggle');
                
                /**
                 * Vault
                 */
                $logged->get('vault/{id}', 'VaultController@get')->name('vault.get');
                $logged->post('vault', 'VaultController@upload')->name('vault.upload');
            });

        /**
         * Exceptions
         */
        $route->get('404', 'ErrorController@error404')->name('error404');
        $route->get('403', 'ErrorController@error403')->name('error403');
        $route->get('401', 'ErrorController@error401')->name('error401');
    });

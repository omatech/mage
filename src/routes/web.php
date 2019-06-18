<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Omatech\Mage\App\Http\Controllers')
     ->prefix(config('mage.prefix'))
     ->middleware('web')
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
                    $auth->get('register', 'RegisterController@showRegistrationForm')->name('register.index');
                    $auth->post('register', 'RegisterController@register')->name('register');
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
                    $logged->get('/', function () {
                        return view('mage::pages.dashboard.index');
                    })->name('dashboard');

                   /*
                    * Logout
                    */
                    $logged->get('logout', 'Auth\LoginController@logout')->name('auth.logout');

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
                                $translations->resource('translations', 'TranslationController');
                           });

                    /**
                     * Vault
                     */
                   $logged->get('vault/{id}', 'VaultController@get')->name('vault.get');
                   $logged->post('vault', 'VaultController@upload')->name('vault.upload');

                   $logged->get('datatables/i18n', 'DatatableController@i18n')->name('datatables.i18n');
               });

        /**
         * Exceptions
         */
         $route->get('404', function () {
            if (auth()->guard('mage')->check()) {
                return response()->view('mage::errors.auth.404', [], 404);
            }
            return response()->view('mage::errors.404', [], 404);
         })->name('error404');

         $route->get('403', function () {
            if (auth()->guard('mage')->check()) {
                return response()->view('mage::errors.auth.403', [], 403);
            }
         })->name('error403');

         $route->get('401', function () {
            return response()->view('mage::errors.401', [], 401);
         })->name('error401');
     });

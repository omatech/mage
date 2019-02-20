<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => config('mage.prefix'), 'middleware' => ['web']], function () {
     
     Route::get('login', function () {
          return view('mage::pages.auth.login');
     })->middleware('mageRedirectIfAuthenticated');

     Route::post('login', 'Omatech\Mage\App\Http\Controllers\Auth\LoginController@login')
          ->name('mage.auth.login');
     

     Route::group(['middleware' => ['mageRedirectIfNotAuthenticated']], function () {

          Route::get('logout', 'Omatech\Mage\App\Http\Controllers\Auth\LoginController@logout')
               ->name('mage.auth.logout');

          Route::get('/', function () {
               return view('mage::pages.dashboard');
          })->name('mage.dashboard');
     
          Route::group(['prefix' => 'users'], function () {
             Route::get('/', 'Omatech\Mage\App\Http\Controllers\UserController@index')
                  ->name('mage.users.index');
     
             Route::get('list', 'Omatech\Mage\App\Http\Controllers\UserController@list')
                  ->name('mage.users.list');
     
             Route::get('create', 'Omatech\Mage\App\Http\Controllers\UserController@create')
                  ->name('mage.users.create');
     
             Route::post('/', 'Omatech\Mage\App\Http\Controllers\UserController@store')
                  ->name('mage.users.store');
     
             Route::get('{id}', 'Omatech\Mage\App\Http\Controllers\UserController@show')
                  ->name('mage.users.show');
     
             Route::get('{id}/edit', 'Omatech\Mage\App\Http\Controllers\UserController@edit')
                  ->name('mage.users.edit');
               
             Route::put('{id}', 'Omatech\Mage\App\Http\Controllers\UserController@update')
                  ->name('mage.users.update');
     
             Route::delete('{id}', 'Omatech\Mage\App\Http\Controllers\UserController@destroy')
                  ->name('mage.users.destroy');
          });
     
          Route::group(['prefix' => 'roles'], function () {
             Route::get('/', 'Omatech\Mage\App\Http\Controllers\RolesController@index')
                  ->name('mage.roles.index');
     
             Route::get('list', 'Omatech\Mage\App\Http\Controllers\RolesController@list')
                  ->name('mage.roles.list');
     
             Route::get('create', 'Omatech\Mage\App\Http\Controllers\RolesController@create')
                  ->name('mage.roles.create');
     
               Route::post('/', 'Omatech\Mage\App\Http\Controllers\RolesController@store')
                    ->name('mage.roles.store');
     
               Route::get('{id}', 'Omatech\Mage\App\Http\Controllers\RolesController@show')
                    ->name('mage.roles.show');
     
               Route::get('{id}/edit', 'Omatech\Mage\App\Http\Controllers\RolesController@edit')
                    ->name('mage.roles.edit');
     
               Route::put('{id}', 'Omatech\Mage\App\Http\Controllers\RolesController@update')
                    ->name('mage.roles.update');
     
               Route::delete('{id}', 'Omatech\Mage\App\Http\Controllers\RolesController@destroy')
                    ->name('mage.roles.destroy');
     
               Route::post('{id}/permissions', 'Omatech\Mage\App\Http\Controllers\RolesController@assignPermissions')
                    ->name('mage.roles.permissions.assign');
          });
     
          Route::group(['prefix' => 'permissions'], function () {
              Route::get('/', 'Omatech\Mage\App\Http\Controllers\PermissionsController@index')
                   ->name('mage.permissions.index');
     
              Route::get('list', 'Omatech\Mage\App\Http\Controllers\PermissionsController@list')
                   ->name('mage.permissions.list');
     
              Route::get('create', 'Omatech\Mage\App\Http\Controllers\PermissionsController@create')
                   ->name('mage.permissions.create');
     
              Route::post('/', 'Omatech\Mage\App\Http\Controllers\PermissionsController@store')
                   ->name('mage.permissions.store');
     
              Route::get('{id}', 'Omatech\Mage\App\Http\Controllers\PermissionsController@show')
                   ->name('mage.permissions.show');
     
              Route::get('{id}/edit', 'Omatech\Mage\App\Http\Controllers\PermissionsController@edit')
                   ->name('mage.permissions.edit');
     
              Route::put('{id}', 'Omatech\Mage\App\Http\Controllers\PermissionsController@update')
                   ->name('mage.permissions.update');
     
              Route::delete('{id}', 'Omatech\Mage\App\Http\Controllers\PermissionsController@destroy')
                   ->name('mage.permissions.destroy');
          });
     
          Route::get('datatables/i18n', 'Omatech\Mage\App\Http\Controllers\DatatableController@i18n')
              ->name('mage.datatables.i18n');
     });
});

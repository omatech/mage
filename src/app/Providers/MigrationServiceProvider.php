<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class MigrationServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $language_lines = __DIR__.'/../../database/migrations/create_language_lines_table.php.stub';
        $permissions = __DIR__.'/../../database/migrations/create_permission_tables.php.stub';
        $language = __DIR__.'/../../database/migrations/add_language_to_users_table.php.stub';
        $vault = __DIR__.'/../../database/migrations/create_vault_table.php.stub';
        $status = __DIR__.'/../../database/migrations/create_status_table.php.stub';
        $statusHistory = __DIR__.'/../../database/migrations/create_status_history_table.php.stub';

        $this->publishes([
            $language_lines => $this->getMigrationFileName(new Filesystem(), 'create_language_lines_table'),
            $permissions => $this->getMigrationFileName(new Filesystem(), 'create_permission_tables'),
            $language => $this->getMigrationFileName(new Filesystem(), 'add_language_to_users_table'),
        ], 'mage-publish');
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     *
     * @param Filesystem $filesystem
     * @return string
     */
    protected function getMigrationFileName(Filesystem $filesystem, string $fileName): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make($this->app->databasePath().DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR)
            ->flatMap(function ($path) use ($filesystem, $fileName) {
                return $filesystem->glob($path."*_{$fileName}.php");
            })->push($this->app->databasePath()."/migrations/{$timestamp}_{$fileName}.php")
            ->first();
    }
}

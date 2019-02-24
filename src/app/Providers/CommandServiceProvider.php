<?php

namespace Omatech\Mage\App\Providers;

use Illuminate\Support\ServiceProvider;
use Omatech\Mage\App\Console\Commands\FindTranslationsKeysCommand;
use Omatech\Mage\App\Console\Commands\ImportTranslationsFromFilesCommand;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function register()
    {
        $this->consoleCommands();
    }

    /**
     * Register console commands.
     *
     * @return void
     */
    private function consoleCommands()
    {
        $this->commands(FindTranslationsKeysCommand::class);
        $this->commands(ImportTranslationsFromFilesCommand::class);
    }
}

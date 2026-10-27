<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translation\ImportTranslations;

#[\Illuminate\Console\Attributes\Description('Import translations from laravel files and save them to database')]
#[\Illuminate\Console\Attributes\Signature('mage:translations-import')]
class ImportTranslationsFromFilesCommand extends Command
{
    /**
     * Create a new command instance.
     *
     * @param ImportTranslations $importTranslations
     */
    public function __construct(private readonly ImportTranslations $importTranslations)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->importTranslations->make();
        $this->call('cache:clear');
    }
}

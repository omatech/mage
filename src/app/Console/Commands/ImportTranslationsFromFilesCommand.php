<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translation\ImportTranslations;

class ImportTranslationsFromFilesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mage:translations-import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import translations from laravel files and save them to database';

    /**
     * @var ImportTranslations
     */
    private $importTranslations;

    /**
     * Create a new command instance.
     *
     * @param ImportTranslations $importTranslations
     */
    public function __construct(ImportTranslations $importTranslations)
    {
        parent::__construct();

        $this->importTranslations = $importTranslations;
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

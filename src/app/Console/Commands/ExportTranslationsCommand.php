<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Omatech\Mage\App\Excels\TranslationsExport;

#[\Illuminate\Console\Attributes\Description('Export translations')]
#[\Illuminate\Console\Attributes\Signature('mage:translations-export {language?}')]
class ExportTranslationsCommand extends Command
{
    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $language = $this->argument('language');

        Excel::store(new TranslationsExport($language), 'translations.xlsx');
    }
}

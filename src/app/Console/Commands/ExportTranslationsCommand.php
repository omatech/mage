<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Omatech\Mage\App\Excels\TranslationsExport;

class ExportTranslationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mage:translations-export {language?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export translations';
   
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

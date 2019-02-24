<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translation\FindTranslations;

class FindTranslationsKeysCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mage:translations-find';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find translations keys and save them to database';

    /**
     * @var FindTranslations
     */
    private $findTranslations;

    /**
     * Create a new command instance.
     *
     * @param FindTranslations $findTranslations
     */
    public function __construct(FindTranslations $findTranslations)
    {
        parent::__construct();

        $this->findTranslations = $findTranslations;
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $this->findTranslations->make();
        $this->call('cache:clear');
    }
}

<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translation\FindTranslations;

#[\Illuminate\Console\Attributes\Description('Find translations keys and save them to database')]
#[\Illuminate\Console\Attributes\Signature('mage:translations-find')]
class FindTranslationsKeysCommand extends Command
{
    /**
     * Create a new command instance.
     *
     * @param FindTranslations $findTranslations
     */
    public function __construct(private readonly FindTranslations $findTranslations)
    {
        parent::__construct();
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

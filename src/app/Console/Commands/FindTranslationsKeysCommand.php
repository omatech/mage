<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translations\FindTranslations;
use Illuminate\Filesystem\Filesystem;
use Omatech\Mage\App\Repositories\Translations\UpdateOrCreateTranslations;

class FindTranslationsKeysCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mage:find-translations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find translations keys and save them to database';

    private $findTranslations;

    /**
     * Create a new command instance.
     *
     * @param UpdateOrCreateTranslations $updateOrCreateTranslations
     */
    public function __construct(UpdateOrCreateTranslations $updateOrCreateTranslations)
    {
        parent::__construct();

        $this->findTranslations = new FindTranslations(new Filesystem, [
            resource_path()
        ], [
            '@lang',
            '@trans',
            'trans',
            '__'
        ]);

        $this->updateOrCreateTranslations = $updateOrCreateTranslations;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $keys = $this->findTranslations->make();
        $this->updateOrCreateTranslations->make($keys);

        $this->call('cache:clear');
    }
}

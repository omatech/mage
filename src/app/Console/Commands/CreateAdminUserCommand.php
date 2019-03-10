<?php

namespace Omatech\Mage\App\Console\Commands;

use Illuminate\Console\Command;
use Omatech\Mage\App\Repositories\Translation\FindTranslations;
use Omatech\Mage\App\Repositories\User\CreateUser;

class CreateAdminUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mage:users-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user';

    /**
     * @var User
     */
    private $user;

    /**
     * Create a new command instance.
     *
     * @param CreateUser $user
     */
    public function __construct(CreateUser $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $name = $this->ask('What is your name?');
        $email = $this->ask('What is your email?');
        $password = $this->secret('What is the password?');

        $this->user->make([
            'name' => $name,
            'language' => app()->getLocale(),
            'email' => $email,
            'password' => bcrypt($password),
            'roles' => [config('mage.authentication.god_role')]
        ]);
    }
}

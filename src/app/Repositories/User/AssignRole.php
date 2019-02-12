<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;

class AssignRole extends UserBaseRepository
{
    private $user;

    public function __construct(GetUser $user)
    {
        $this->user = $user;
    }

    public function make($id, $roles)
    {
        $user = $this->user->make($id);

        return $user->syncRoles($roles);
    }
}

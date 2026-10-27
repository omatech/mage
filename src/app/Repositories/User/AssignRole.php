<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;

class AssignRole extends UserBaseRepository
{
    public function __construct(private readonly GetUser $user)
    {
    }

    public function make($id, $roles)
    {
        $user = $this->user->make($id);

        return $user->syncRoles($roles);
    }
}

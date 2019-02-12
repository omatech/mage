<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class GetRoles extends RoleBaseRepository
{
    public function make()
    {
        return $this->query()
            ->select('id', 'name')
            ->get();
    }
}

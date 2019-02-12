<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class CreateRole extends RoleBaseRepository
{
    public function make($data)
    {
        return $this->query()
            ->create($data);
    }
}

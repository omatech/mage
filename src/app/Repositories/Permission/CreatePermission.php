<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class CreatePermission extends PermissionBaseRepository
{
    public function make($data)
    {
        return $this->query()
            ->create($data);
    }
}

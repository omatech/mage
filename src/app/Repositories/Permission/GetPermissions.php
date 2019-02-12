<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class GetPermissions extends PermissionBaseRepository
{
    public function make()
    {
        return $this->query()
            ->select('id', 'name')
            ->get();
    }
}

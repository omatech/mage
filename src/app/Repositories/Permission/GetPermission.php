<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class GetPermission extends PermissionBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->select('id', 'name')
            ->where('id', $id)
            ->first();
    }
}

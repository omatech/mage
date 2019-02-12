<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class DeletePermission extends PermissionBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->where('id', $id)
            ->delete();
    }
}

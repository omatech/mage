<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class AssignRolePermissions extends RoleBaseRepository
{
    public function make($id, $permissions)
    {
        $role = $this->query()
            ->find($id);

        $role->syncPermissions($permissions);
    }
}

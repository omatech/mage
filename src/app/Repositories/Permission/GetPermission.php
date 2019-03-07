<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class GetPermission extends PermissionBaseRepository
{
    public function make($id)
    {
        $permission = $this->query()
            ->select('id', 'name')
            ->where('id', $id)
            ->first();

        throw_if($permission == null, new ModelNotFoundException);

        return $permission;
    }
}

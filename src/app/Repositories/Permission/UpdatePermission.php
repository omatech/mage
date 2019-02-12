<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;

class UpdatePermission extends PermissionBaseRepository
{
    public function make($id, $data)
    {
        return $this->query()
            ->where('id', $id)
            ->update($data);
    }
}

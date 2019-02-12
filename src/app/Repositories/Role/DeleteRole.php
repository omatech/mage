<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class DeleteRole extends RoleBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->where('id', $id)
            ->delete();
    }
}

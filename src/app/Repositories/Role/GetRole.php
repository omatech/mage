<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class GetRole extends RoleBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->select('id', 'name')
            ->where('id', $id)
            ->first();
    }
}

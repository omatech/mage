<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;

class UpdateRole extends RoleBaseRepository
{
    public function make($id, $data)
    {
        return $this->query()
            ->where('id', $id)
            ->update($data);
    }
}

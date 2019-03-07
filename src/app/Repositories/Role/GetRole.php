<?php

namespace Omatech\Mage\App\Repositories\Role;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Omatech\Mage\App\Repositories\RoleBaseRepository;

class GetRole extends RoleBaseRepository
{
    public function make($id)
    {
        $role = $this->query()
            ->select('id', 'name')
            ->where('id', $id)
            ->first();

        throw_if($role == null, new ModelNotFoundException);

        return $role;
    }
}

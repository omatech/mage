<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Role;

abstract class RoleBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Role::class;
    }
}

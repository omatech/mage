<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Permission;

abstract class PermissionBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Permission::class;
    }
}

<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Permission;
use Omatech\Lars\BaseRepository;

abstract class PermissionBaseRepository extends BaseRepository
{
    public function model(): String
    {
        return Permission::class;
    }
}

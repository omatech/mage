<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\Role;
use Omatech\Lars\BaseRepository;

abstract class RoleBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return Role::class;
    }
}

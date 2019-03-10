<?php

namespace Omatech\Mage\App\Repositories\Role;

use Omatech\Mage\App\Repositories\RoleBaseRepository;
use Yajra\DataTables\DataTables;

class ListRoleDatatable extends RoleBaseRepository
{
    public function make()
    {
        $roles = $this->query()
            ->select('id', 'name');

        return DataTables::of($roles)->make(true);
    }
}

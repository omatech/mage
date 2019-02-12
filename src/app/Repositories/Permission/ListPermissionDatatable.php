<?php

namespace Omatech\Mage\App\Repositories\Permission;

use Omatech\Mage\App\Repositories\PermissionBaseRepository;
use Yajra\DataTables\DataTables;

class ListPermissionDatatable extends PermissionBaseRepository
{
    public function make()
    {
        $permissions = $this->query()
            ->select('id', 'name');

        return DataTables::of($permissions)->make(true);
    }
}

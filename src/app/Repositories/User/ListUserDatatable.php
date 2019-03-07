<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;
use Yajra\DataTables\DataTables;

class ListUserDatatable extends UserBaseRepository
{
    public function make($columns = ['id', 'name', 'email', 'language'])
    {
        $users = $this->query()
            ->with(['roles' => function ($q) {
                $q->select('id', 'name');
            }])
            ->select($columns);

        return DataTables::of($users)->make(true);
    }
}

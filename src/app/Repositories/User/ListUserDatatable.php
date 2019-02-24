<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;
use Yajra\DataTables\DataTables;

class ListUserDatatable extends UserBaseRepository
{
    public function make()
    {
        $users = $this->query()
            ->with(['roles'])
            ->select('id', 'name', 'email', 'name as language');

        return DataTables::of($users)->make(true);
    }
}

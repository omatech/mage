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
        /*$hosts = $this->query()
            ->with(['sites'=>function ($q) {
                $q->select('sites.id', 'sites.name');
            }])
            ->whereHas('sites.users', function ($q) {
                $q->where('users.id', auth()->user()->id);
            })->select('hosts.id', 'hosts.host', 'hosts.created_at', 'hosts.site_id');*/

        return DataTables::of($users)->make(true);
    }
}

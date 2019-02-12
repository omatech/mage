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
        /*$hosts = $this->query()
            ->with(['sites'=>function ($q) {
                $q->select('sites.id', 'sites.name');
            }])
            ->whereHas('sites.users', function ($q) {
                $q->where('users.id', auth()->user()->id);
            })->select('hosts.id', 'hosts.host', 'hosts.created_at', 'hosts.site_id');*/

        return DataTables::of($roles)->make(true);
    }
}

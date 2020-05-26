<?php

namespace Omatech\Mage\App\Repositories\ActivityLogs;

use Yajra\DataTables\DataTables;
use Omatech\Mage\App\Repositories\ActivityLogBaseRepository;

class ListActivityLogsDatatable extends ActivityLogBaseRepository
{
    public function make()
    {
        $activityLogs = $this->query()
        ->leftJoin('users', 'users.id', '=', 'activity_logs.user_id')
        ->select(
            'activity_logs.id',
            'activity_logs.user_id',
            'users.email',
            'activity_logs.model_type',
            'activity_logs.model_id',
            'activity_logs.uri',
            'activity_logs.action',
            'activity_logs.alias',
            'activity_logs.method',
            'activity_logs.user_agent',
            'activity_logs.ip_address',
            'activity_logs.created_at',
        )
        ->groupBy('users.id', 'activity_logs.id')
        ->orderBy('activity_logs.created_at', 'desc');

        return DataTables::of($activityLogs)->make(true);
    }
}
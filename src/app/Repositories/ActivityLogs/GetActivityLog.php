<?php

namespace Omatech\Mage\App\Repositories\ActivityLogs;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Omatech\Mage\App\Repositories\ActivityLogBaseRepository;

class GetActivityLog extends ActivityLogBaseRepository
{
    public function make($id)
    {
        $activityLog = $this->query()
        ->leftJoin('users', 'users.id', 'activity_logs.user_id')
        ->select(
            "activity_logs.id",
            "activity_logs.user_id",
            "activity_logs.model_type",
            "activity_logs.model_id",
            "activity_logs.uri",
            "activity_logs.action",
            "activity_logs.alias",
            "activity_logs.method",
            "activity_logs.user_agent",
            "activity_logs.ip_address",
            "activity_logs.headers",
            "activity_logs.x_prescriber_id",
            "activity_logs.x_remote_ip",
            "activity_logs.authorization_token",
            "activity_logs.body",
            "activity_logs.files",
            "activity_logs.microtime_start",
            "activity_logs.microtime_stop",
            "activity_logs.created_at",
            "activity_logs.updated_at",
            "activity_logs.deleted_at",            
            "users.email",
            "users.last_login_at",
        )
            ->where('activity_logs.id', $id)
            ->first();

        throw_if($activityLog == null, new ModelNotFoundException);

        return $activityLog;
    }
}






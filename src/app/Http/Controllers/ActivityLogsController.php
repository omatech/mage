<?php

namespace Omatech\Mage\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Omatech\Mage\App\Repositories\ActivityLogs\GetActivityLog;
use Omatech\Mage\App\Repositories\ActivityLogs\ListActivityLogsDatatable;

class ActivityLogsController extends Controller
{
    public function index()
    {
        return view('pages.activity-logs.index');
    }

    public function list(ListActivityLogsDatatable $activityLogs)
    {
        return $activityLogs->make(); 
    }

    public function show(GetActivityLog $activityLogs, $id)
    {
        $activityLog = $activityLogs->make($id);

        return view('pages.activity-logs.show', ['activityLog' => $activityLog]);
    }
}

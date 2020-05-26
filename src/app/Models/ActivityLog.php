<?php

namespace Omatech\Mage\App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';
    protected $fillable = [
        'user_id',
        'model_type',
        'model_id',
        'headers',
        'x_prescriber_id',
        'x_remote_ip',
        'authorization_token',
        'uri',
        'action',
        'alias',
        'method',
        'user_agent',
        'ip_address',
        'body',
        'files',
        'microtime_start',
        'microtime_stop'
    ];
}

<?php
namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;
use Omatech\Mage\App\Models\ActivityLog;

class ActivityLogBaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return ActivityLog::class;
    }
}

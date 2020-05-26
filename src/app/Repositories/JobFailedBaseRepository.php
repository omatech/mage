<?php
namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;
use Omatech\Mage\App\Models\JobFailed;

class JobFailedBaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return JobFailed::class;
    }
}

<?php
namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;
use Omatech\Mage\App\Models\JobDone;

class JobDoneBaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return JobDone::class;
    }
}

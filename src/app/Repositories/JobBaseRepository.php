<?php
namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;
use Omatech\Mage\App\Models\Job;

class JobBaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return Job::class;
    }
}

<?php
namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;
use Omatech\Mage\App\Models\DoneJob;

class DoneJobBaseRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return DoneJob::class;
    }
}

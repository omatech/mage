<?php

namespace Omatech\Mage\App\Repositories\Jobs;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Omatech\Mage\App\Repositories\FailedJobBaseRepository;

class GetFailedJob extends FailedJobBaseRepository
{
    public function make($id)
    {
        $job = $this->query()
            ->where('id', $id)
            ->first();

        throw_if($job == null, new ModelNotFoundException);

        return $job;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\Jobs;

use Omatech\Mage\App\Repositories\JobBaseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GetJob extends JobBaseRepository
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

<?php

namespace Omatech\Mage\App\Repositories\Jobs;

use Yajra\DataTables\DataTables;
use Omatech\Mage\App\Repositories\JobDoneBaseRepository;

class ListJobsDoneDatatable extends JobDoneBaseRepository
{
    public function make()
    {
        $jobs = $this->query();

        return DataTables::of($jobs)->make(true);
    }
}
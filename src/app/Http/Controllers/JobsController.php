<?php

namespace Omatech\Mage\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Omatech\Mage\App\Repositories\Jobs\ListJobsDatatable;
use Omatech\Mage\App\Repositories\Jobs\ListJobsDoneDatatable;
use Omatech\Mage\App\Repositories\Jobs\ListJobsFailedDatatable;

class JobsController extends Controller
{
    public function index()
    {
        return view('pages.jobs.index');
    }

    public function indexJobsDone()
    {
        return view('pages.jobs.index-jobs-done');
    }

    public function indexJobsFailed()
    {
        return view('pages.jobs.index-jobs-failed');
    }

    public function list(ListJobsDatatable $jobs)
    {
        return $jobs->make(); 
    }

    public function listDone(ListJobsDoneDatatable $jobs)
    {
        return $jobs->make(); 
    }

    public function listFailed(ListJobsFailedDatatable $jobs)
    {
        return $jobs->make(); 
    }
}

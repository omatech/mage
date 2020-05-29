<?php

namespace Omatech\Mage\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Omatech\Mage\App\Repositories\Jobs\GetJob;
use Omatech\Mage\App\Repositories\Jobs\GetDoneJob;
use Omatech\Mage\App\Repositories\Jobs\GetFailedJob;
use Omatech\Mage\App\Repositories\Jobs\ListJobsDatatable;
use Omatech\Mage\App\Repositories\Jobs\ListDoneJobsDatatable;
use Omatech\Mage\App\Repositories\Jobs\ListFailedJobsDatatable;

class JobsController extends Controller
{
    public function index()
    {
        return view('pages.jobs.index');
    }

    public function indexDoneJobs()
    {
        return view('pages.jobs.index-done-jobs');
    }

    public function indexFailedJobs()
    {
        return view('pages.jobs.index-failed-jobs');
    }

    public function list(ListJobsDatatable $jobs)
    {
        return $jobs->make(); 
    }

    public function listDone(ListDoneJobsDatatable $jobs)
    {
        return $jobs->make(); 
    }

    public function listFailed(ListFailedJobsDatatable $jobs)
    {
        return $jobs->make(); 
    }

    public function show(GetJob $job, $id)
    {
        $job = $job->make($id);

        return view('pages.jobs.show', ['job' => $job]);
    }

    public function showDone(GetDoneJob $job, $id)
    {
        $job = $job->make($id);

        return view('pages.jobs.show-done', ['job' => $job]);
    }

    public function showFailed(GetFailedJob $job, $id)
    {
        $job = $job->make($id);

        return view('pages.jobs.show-failed', ['job' => $job]);
    }
}

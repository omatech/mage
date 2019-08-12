<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('mage::pages.dashboard.index');
    }
}

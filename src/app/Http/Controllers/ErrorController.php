<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function error404()
    {
        if (auth()->guard('mage')->check()) {
            return response()->view('mage::errors.auth.404', [], 404);
        }
        return response()->view('mage::errors.404', [], 404);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function error403()
    {
        if (auth()->guard('mage')->check()) {
            return response()->view('mage::errors.auth.403', [], 403);
        }
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function error401()
    {
        return response()->view('mage::errors.401', [], 401);
    }
}

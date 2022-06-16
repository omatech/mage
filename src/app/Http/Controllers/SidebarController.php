<?php

namespace Omatech\Mage\App\Http\Controllers;

use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function toggle(Request $request)
    {
        $isShown = $request->isShown;

        $isShown = ($isShown == 'false') ? 'sidebar-open' : 'sidebar-collapse';

        session(['sidebar' => $isShown]);
        $cookie = cookie('sidebar', $isShown, time() + (10 * 365 * 24 * 60 * 60));
        return response()->json(['status' => 'ok'])->withCookie($cookie);
    }
}

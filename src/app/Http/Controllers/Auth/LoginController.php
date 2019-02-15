<?php
namespace Omatech\Mage\App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use AuthenticatesUsers;

    public function redirectTo()
    {
        return route(config('mage.on_login_to_route'));
    }
}

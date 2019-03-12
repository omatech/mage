<?php
namespace Omatech\Mage\App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Omatech\Mage\App\Exceptions\UnauthorizedException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use AuthenticatesUsers;

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('mage::pages.auth.login');
    }

    /**
     * Route after login.
     *
     * @return string
     */
    public function redirectTo()
    {
        return route(config('mage.on_login_to_route'));
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        return redirect(route(config('mage.on_logout_to_route')));
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     *
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|email|string',
            'password' => 'required|string',
        ], [
            'email.required' => __('mage.auth.validations.email.required'),
            'email.string' => __('mage.auth.validations.email.string'),
            'email.email' => __('mage.auth.validations.email.email'),
            'password.required' => __('mage.auth.validations.password.required'),
            'password.string' => __('mage.auth.validations.password.string'),
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('mage');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $hasPermission = $user->can('mage-access');

        if ($hasPermission == false) {
            throw new UnauthorizedException($user);
        }
    }
}

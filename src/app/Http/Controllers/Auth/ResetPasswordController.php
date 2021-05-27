<?php

namespace Omatech\Mage\App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('mage::pages.auth.password-reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function redirectTo()
    {
        return route(config('mage.on_reset_to_route'));
    }

    /**
     * Get the password reset validation error messages.
     *
     * @return array
     */
    protected function validationErrorMessages()
    {
        return [
            'email.required' => __('mage.auth.validations.email.required'),
            'email.email' => __('mage.auth.validations.email.email'),
            'token.required' => __('mage.auth.validations.token.required'),
            'password.required' => __('mage.auth.validations.password.required'),
            'password.confirmed' => __('mage.auth.validations.password.confirmed'),
            'password.min' => __('mage.auth.validations.password.min'),
        ];
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('mage');
    }
}

<?php

namespace Omatech\Mage\App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('mage::pages.auth.forgot-password');
    }

    /**
     * Validate the email for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email'
        ], [
            'email.required' => __('mage.auth.validations.email.required'),
            'email.string' => __('mage.auth.validations.email.string'),
            'email.email' => __('mage.auth.validations.email.email'),
        ]);
    }
}

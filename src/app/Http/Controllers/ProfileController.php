<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\Mage\App\Repositories\User\UpdateUser;
use Omatech\Mage\App\Http\Requests\Profile\UpdateRequest;
use Omatech\Mage\App\Http\Requests\Profile\ChangePasswordRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('mage::pages.profile.index');
    }

    public function changePasswordShow()
    {
        return view('mage::pages.profile.change-password');
    }

    public function changePassword(ChangePasswordRequest $request, UpdateUser $user)
    {
        $data = $request->validated();

        $user->make(auth()->guard('mage')->user()->id, [
            'password' => bcrypt($data['profile_password_new'])
        ]);

        return redirect(route('mage.profile.change-password.index'))->with('status', 'updated');
    }

    public function update(UpdateProfileRequestInterface $request, UpdateProfileInterface $user)
    {
        $data = $request->validated();

        $user->make(auth()->guard('mage')->user()->id, [
            'name' => $data['profile_name']
        ]);

        return redirect(route('mage.profile.show'))->with('status', 'updated');
    }
}

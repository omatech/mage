<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\Mage\App\Http\Requests\Users\CreateRequest;
use Omatech\Mage\App\Repositories\Role\GetRoles;
use Omatech\Mage\App\Repositories\User\DeleteUser;
use Omatech\Mage\App\Http\Requests\Users\CreateRequest;
use Omatech\Mage\App\Http\Requests\Users\UpdateRequest;
use Omatech\Mage\App\Contracts\Users\CreateUserInterface;
use Omatech\Mage\App\Repositories\User\ListUserDatatable;
use Omatech\Mage\App\Http\Requests\Users\UpdateRequest;
use Omatech\Mage\App\Repositories\User\UpdateUserAssignRoles;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('mage::pages.users.index');
    }

    public function list(ListUserDatatable $users)
    {
        return $users->make();
    }

    public function create(GetRoles $roles)
    {
        $roles = $roles->make();

        return view('mage::pages.users.create', ['roles' => $roles]);
    }

    public function store(CreateRequest $request, CreateUserInterface $user)
    {
        $data = $request->validated();

        $user = $user->make([
            'name'     => $data['users_name'],
            'email'    => $data['users_email'],
            'language' => $data['users_language'],
            'password' => bcrypt(Str::random()),
            'roles'    => $data['users_roles']
        ]);

        $user->sendMailWelcomeWithoutPasswordNotification();

        return redirect(route('mage.users.index'))->with('status', 'created');
    }

    public function show(GetUser $user)
    {
        return view('mage::pages.users.show', ['user' => $user]);
    }

    public function edit(GetUser $user, GetRoles $roles, $id)
    {
        $user = $user->make($id);
        $roles = $roles->make();

        return view('mage::pages.users.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(UpdateRequest $request, UpdateUserAssignRoles $user, $id)
    {
        $data = $request->validated();

        $user->make($id, [
            'name'     => $data['users_name'],
            'email'    => $data['users_email'],
            'language' => $data['users_language'],
            'roles'    => $data['users_roles']
        ]);

        return redirect(route('mage.users.index'))->with('status', 'updated');
    }

    public function destroy(DeleteUser $user, $id)
    {
        $user = $user->make($id);

        return response()->json(['status' => 'success']);
    }
}

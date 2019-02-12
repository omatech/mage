<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\Mage\App\Http\Requests\Roles\CreateRequest;
use Omatech\Mage\App\Http\Requests\Roles\UpdateRequest;
use Omatech\Mage\App\Repositories\Permission\GetPermissions;
use Omatech\Mage\App\Repositories\Role\AssignRolePermissions;
use Omatech\Mage\App\Repositories\Role\CreateRole;
use Omatech\Mage\App\Repositories\Role\DeleteRole;
use Omatech\Mage\App\Repositories\Role\GetRole;
use Omatech\Mage\App\Repositories\Role\ListRoleDatatable;
use Omatech\Mage\App\Repositories\Role\UpdateRole;

class RolesController extends Controller
{
    public function index()
    {
        return view('mage::pages.roles.list');
    }

    public function list(ListRoleDatatable $roles)
    {
        return $roles->make();
    }

    public function create()
    {
        return view('mage::pages.roles.create');
    }

    public function store(CreateRequest $request, CreateRole $role)
    {
        $data = $request->validated();

        $role->make([
            'name' => $data['roles_name']
        ]);

        return redirect(route('mage.roles.index'))->with('status', 'created');
    }

    public function show(GetRole $role, GetPermissions $permissions, $id)
    {
        $role = $role->make($id);
        $permissions = $permissions->make();

        return view('mage::pages.roles.show', ['role' => $role, 'permissions' => $permissions]);
    }

    public function edit(GetRole $role, $id)
    {
        $role = $role->make($id);

        return view('mage::pages.roles.edit', ['role' => $role]);
    }

    public function update(UpdateRequest $request, UpdateRole $role, $id)
    {
        $data = $request->validated();

        $role->make($id, [
            'name' => $data['roles_name']
        ]);

        return redirect(route('mage.roles.index'))->with('status', 'updated');
    }

    public function destroy(DeleteRole $role, $id)
    {
        $role = $role->make($id);

        return response()->json(['status' => 'success']);
    }

    public function assignPermissions(AssignRolePermissions $assign, $id)
    {
        $permissions = request()->permissions;

        $assign->make($id, $permissions);
    }
}

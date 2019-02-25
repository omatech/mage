<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\Mage\App\Http\Requests\Permissions\CreateRequest;
use Omatech\Mage\App\Http\Requests\Permissions\UpdateRequest;
use Omatech\Mage\App\Repositories\Permission\CreatePermission;
use Omatech\Mage\App\Repositories\Permission\DeletePermission;
use Omatech\Mage\App\Repositories\Permission\GetPermission;
use Omatech\Mage\App\Repositories\Permission\ListPermissionDatatable;
use Omatech\Mage\App\Repositories\Permission\UpdatePermission;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('mage::pages.permissions.index');
    }

    public function list(ListPermissionDatatable $permissions)
    {
        return $permissions->make();
    }

    public function create()
    {
        return view('mage::pages.permissions.create');
    }

    public function store(CreateRequest $request, CreatePermission $permission)
    {
        $data = $request->validated();

        $permission->make([
            'name' => $data['permissions_name']
        ]);

        return redirect(route('mage.permissions.index'))->with('status', 'created');
    }

    public function show()
    {
        return view('mage::pages.permissions.show');
    }

    public function edit(GetPermission $permission, $id)
    {
        $permission = $permission->make($id);

        return view('mage::pages.permissions.edit', ['permission' => $permission]);
    }

    public function update(UpdateRequest $request, UpdatePermission $permission, $id)
    {
        $data = $request->validated();

        $permission->make($id, [
            'name' => $data['permissions_name']
        ]);

        return redirect(route('mage.permissions.index'))->with('status', 'updated');
    }

    public function destroy(DeletePermission $permission, $id)
    {
        $permission = $permission->make($id);

        return response()->json(['status' => 'success']);
    }
}

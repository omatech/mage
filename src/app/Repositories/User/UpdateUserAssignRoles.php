<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;

class UpdateUserAssignRoles
{
    private $user;
    private $roles;

    public function __construct(UpdateUser $user, AssignRole $roles)
    {
        $this->user = $user;
        $this->roles = $roles;
    }

    public function make($id, $data)
    {
        return DB::transaction(function () use ($id, $data) {
            $this->user->make($id, [
                'name'     => $data['name'],
                'email'    => $data['email'],
                'language' => $data['language']
            ]);

            return $this->roles->make($id, $data['roles']);
        });
    }
}

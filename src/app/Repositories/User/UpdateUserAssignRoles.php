<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\UserBaseRepository;
use Omatech\Mage\App\Contracts\Users\UpdateUserAssignRolesInterface;

class UpdateUserAssignRoles extends UserBaseRepository implements UpdateUserAssignRolesInterface
{
    public function __construct(private readonly UpdateUser $user, private readonly AssignRole $roles)
    {
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

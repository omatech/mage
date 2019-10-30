<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\UserBaseRepository;
use Omatech\Mage\App\Contracts\Users\CreateUserInterface;

class CreateUser extends UserBaseRepository implements CreateUserInterface
{
    public function make($data)
    {
        return DB::transaction(function () use ($data) {
            $user = $this->query()
                ->create($data);

            $user->syncRoles($data['roles']);

            return $user;
        });
    }
}

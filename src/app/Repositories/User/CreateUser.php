<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\UserBaseRepository;

class CreateUser extends UserBaseRepository
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

<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\UserBaseRepository;
use Omatech\Mage\App\Contracts\Profile\UpdateProfileInterface;

class UpdateUser extends UserBaseRepository implements UpdateProfileInterface
{
    public function make($id, $data)
    {
        return DB::transaction(function () use ($id, $data) {
            $user = $this->query()
                ->where('id', $id)
                ->update($data);

            return $user;
        });
    }
}

<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\UserBaseRepository;

class UpdateUser extends UserBaseRepository
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

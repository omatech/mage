<?php

namespace Omatech\Mage\App\Repositories\User;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Omatech\Mage\App\Repositories\UserBaseRepository;

class GetUser extends UserBaseRepository
{
    public function make($id, $columns = ['id', 'name', 'email'])
    {
        $users = $this->query()
            ->with(['roles'])
            ->select($columns)
            ->where('id', $id)
            ->first();

        throw_if($users == null, new ModelNotFoundException);

        return $users;
    }
}

<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;

class DeleteUser extends UserBaseRepository
{
    public function make($id)
    {
        return $this->query()
            ->where('id', $id)
            ->delete();
    }
}

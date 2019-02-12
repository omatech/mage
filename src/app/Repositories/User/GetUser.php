<?php

namespace Omatech\Mage\App\Repositories\User;

use Omatech\Mage\App\Repositories\UserBaseRepository;

class GetUser extends UserBaseRepository
{
    public function make($id)
    {
        $users = $this->query()
            ->with(['roles'])
            ->select('id', 'name', 'email', 'name as hola', 'name as language')
            ->where('id', $id)
            ->first();
        
        return $users;
    }
}

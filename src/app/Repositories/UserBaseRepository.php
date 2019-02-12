<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Mage\App\Models\User;

abstract class UserBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return User::class;
    }
}

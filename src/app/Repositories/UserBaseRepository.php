<?php

namespace Omatech\Mage\App\Repositories;

use Omatech\Lars\BaseRepository;

abstract class UserBaseRepository extends BaseRepository
{
    public function model() : String
    {
        return config('mage.authentication.user_model');
    }
}

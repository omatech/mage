<?php

namespace Omatech\Mage\App\Criterias;

abstract class BaseCriteria
{
    protected function godRole()
    {
        return auth()->user()->hasRole(config('mage.authentication.god_role'));
    }
}

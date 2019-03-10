<?php

namespace Omatech\Mage\App\Criterias;

abstract class BaseCriteria
{
    protected function godRole()
    {
        return auth()->guard('mage')->user()->hasRole(config('mage.authentication.god_role'));
    }
}

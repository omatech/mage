<?php

namespace Omatech\Mage\App\Criterias;

use Omatech\Lars\Contracts\CriteriaInterface;

abstract class BaseCriteria implements CriteriaInterface
{
    protected function godRole()
    {
        return (auth()->guard('mage')->user() && auth()->guard('mage')->user()->hasRole(config('mage.authentication.god_role')));
    }
}

<?php

namespace Omatech\Mage\App\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function __construct($user = null)
    {
        if ($user) {
            auth()->guard('mage')->logout();
        }
        parent::__construct();
    }
}

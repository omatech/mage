<?php

namespace Omatech\Mage\App\Events;

class UserCreated
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public $user)
    {
    }
}

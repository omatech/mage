<?php

namespace Omatech\Mage\App\Events;

class UserCreated
{
    public $user;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}

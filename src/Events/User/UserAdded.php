<?php

namespace MarJose123\NinshikiEvent\Events\User;

use Illuminate\Foundation\Events\Dispatchable;

class UserAdded
{
    use Dispatchable;

    /**
     * The User Instance.
     */
    public mixed $user;

    /**
     * Create a new event instance.
     */
    public function __construct(mixed $user)
    {
        $this->user = $user;
    }
}

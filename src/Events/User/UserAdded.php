<?php

namespace MarJose123\NinshikiEvent\Events\User;

use Illuminate\Foundation\Events\Dispatchable;

class UserAdded
{
    use Dispatchable;

    /**
     * The User Instance.
     *
     * @var mixed
     */
    public mixed $user;


    /**
     * Create a new event instance.
     *
     * @param mixed $user
     */
    public function __construct(mixed $user)
    {
        $this->user = $user;
    }

}

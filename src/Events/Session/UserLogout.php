<?php

namespace MarJose123\NinshikiEvent\Events\Session;

use Illuminate\Foundation\Events\Dispatchable;

class UserLogout
{
    use Dispatchable;

    /**
     * The Authenticated User Instance.
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

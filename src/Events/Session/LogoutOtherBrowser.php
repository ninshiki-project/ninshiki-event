<?php

namespace MarJose123\NinshikiEvent\Events\Session;

use Illuminate\Foundation\Events\Dispatchable;

class LogoutOtherBrowser
{
    use Dispatchable;

    /**
     * The Authenticated User Instance.
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

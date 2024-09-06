<?php

namespace MarJose123\NinshikiEvent\Events\Post;

use Illuminate\Foundation\Events\Dispatchable;

class PostToggleLike
{
    use Dispatchable;

    /**
     * The Post Instance.
     */
    public mixed $post;

    /**
     * The User Instance.
     */
    public mixed $user;

    /**
     * Create a new event instance.
     */
    public function __construct(mixed $post, mixed $user)
    {
        $this->post = $post;
        $this->user = $user;
    }
}

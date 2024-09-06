<?php

namespace MarJose123\NinshikiEvent\Events\Post;

use Illuminate\Foundation\Events\Dispatchable;

class PostToggleLike
{
    use Dispatchable;

    /**
     * The Post Instance.
     *
     * @var mixed
     */
    public mixed $post;

    /**
     * The User Instance.
     *
     * @var mixed
     */
    public mixed $user;


    /**
     * Create a new event instance.
     *
     * @param mixed $post
     * @param mixed $user
     */
    public function __construct(mixed $post, mixed $user)
    {
        $this->post = $post;
        $this->user = $user;
    }

}

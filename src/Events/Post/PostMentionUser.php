<?php

namespace MarJose123\NinshikiEvent\Events\Post;

use Illuminate\Foundation\Events\Dispatchable;

class PostMentionUser
{
    use Dispatchable;

    /**
     * The Post Instance.
     */
    public mixed $post;

    /**
     * The Recipient Instance.
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

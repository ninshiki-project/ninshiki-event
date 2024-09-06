<?php

namespace MarJose123\NinshikiEvent\Events\Post;

use Illuminate\Foundation\Events\Dispatchable;

class NewPostAdded
{
    use Dispatchable;

    /**
     * The Post Instance.
     */
    public mixed $post;

    /**
     * The Recipient Instance.
     */
    public mixed $recipients;

    /**
     * Create a new event instance.
     */
    public function __construct(mixed $post, mixed $recipients)
    {
        $this->post = $post;
        $this->recipients = $recipients;
    }
}

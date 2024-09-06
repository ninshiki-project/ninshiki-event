<?php

namespace MarJose123\NinshikiEvent\Events\Post;

use Illuminate\Foundation\Events\Dispatchable;

class NewPostAdded
{
    use Dispatchable;

    /**
     * The Post Instance.
     *
     * @var mixed
     */
    public mixed $post;

    /**
     * The Recipient Instance.
     *
     * @var mixed
     */
    public mixed $recipients;


    /**
     * Create a new event instance.
     *
     * @param mixed $post
     * @param mixed $recipients
     */
    public function __construct(mixed $post, mixed $recipients)
    {
        $this->post = $post;
        $this->recipients = $recipients;
    }

}

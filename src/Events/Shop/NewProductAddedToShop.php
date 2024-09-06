<?php

namespace MarJose123\NinshikiEvent\Events\Shop;

use Illuminate\Foundation\Events\Dispatchable;

class NewProductAddedToShop
{
    use Dispatchable;

    /**
     * The Post Instance.
     */
    public mixed $shop;

    /**
     * Create a new event instance.
     */
    public function __construct(mixed $shop)
    {
        $this->shop = $shop;
    }
}

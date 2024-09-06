<?php

namespace MarJose123\NinshikiEvent\Events\Shop;

use Illuminate\Foundation\Events\Dispatchable;

class UserRedeemFromShop
{
    use Dispatchable;

    /**
     * The Shop Instance.
     */
    public mixed $shop;

    /**
     * The User Instance.
     */
    public mixed $user;

    /**
     * The Redeem Instance.
     */
    public mixed $redeem;

    /**
     * Create a new event instance.
     */
    public function __construct(mixed $redeem, mixed $user, mixed $shop)
    {
        $this->shop = $shop;
        $this->user = $user;
        $this->redeem = $redeem;
    }
}

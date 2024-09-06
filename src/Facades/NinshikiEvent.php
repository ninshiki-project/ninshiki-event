<?php

namespace MarJose123\NinshikiEvent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarJose123\NinshikiEvent\NinshikiEvent
 */
class NinshikiEvent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarJose123\NinshikiEvent\NinshikiEvent::class;
    }
}

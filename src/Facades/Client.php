<?php

namespace BrokerageCheap\MetaFive\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BrokerageCheap\MetaTrader\MetaTrader
 */
class Client extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'meta-five';
    }
}

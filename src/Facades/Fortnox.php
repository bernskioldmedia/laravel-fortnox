<?php

namespace BernskioldMedia\Fortnox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BernskioldMedia\Fortnox\Fortnox
 */
class Fortnox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-fortnox';
    }
}

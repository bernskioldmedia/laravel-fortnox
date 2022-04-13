<?php

namespace BernskioldMedia\LaravelFortnox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BernskioldMedia\LaravelFortnox\LaravelFortnox
 */
class LaravelFortnox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-fortnox';
    }
}

<?php

namespace BernskioldMedia\Fortnox\Facades;

use BernskioldMedia\Fortnox\Resources\Invoice;
use BernskioldMedia\Fortnox\Resources\Sie;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Invoice invoices()
 * @method static Sie sie()
 *
 * @see \BernskioldMedia\Fortnox\Fortnox
 */
class Fortnox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-fortnox';
    }
}

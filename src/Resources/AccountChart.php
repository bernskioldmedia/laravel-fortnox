<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;

class AccountChart extends BaseResource
{
    use Readable;

    protected function getEndpoint(): string
    {
        return 'accountcharts';
    }
}

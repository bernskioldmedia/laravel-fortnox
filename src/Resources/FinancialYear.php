<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use Carbon\Carbon;

class FinancialYear extends BaseResource
{
    use Readable;
    use Createable;

    public function forDate(Carbon $date): static
    {
        return $this->search('date', $date->format('Y-m-d'));
    }

    protected function getEndpoint(): string
    {
        return 'contracts';
    }
}

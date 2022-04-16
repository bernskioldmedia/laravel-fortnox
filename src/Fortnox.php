<?php

namespace BernskioldMedia\Fortnox;

use BernskioldMedia\Fortnox\Resources\Invoice;
use BernskioldMedia\Fortnox\Resources\Sie;

class Fortnox
{

    public function __construct(
        protected FortnoxClient $client
    ) {
    }

    public function invoices(): Invoice
    {
        return new Invoice($this->client);
    }

    public function sie(): Sie
    {
        return new Sie($this->client);
    }

}

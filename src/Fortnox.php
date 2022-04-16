<?php

namespace BernskioldMedia\Fortnox;

use BernskioldMedia\Fortnox\Resources\Invoice;

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

}

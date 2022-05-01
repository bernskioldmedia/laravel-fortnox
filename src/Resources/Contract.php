<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersFilter;

class Contract extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersFilter;

    public function active(): static
    {
        return $this->filter('active');
    }

    public function inactive(): static
    {
        return $this->filter('inactive');
    }

    public function finished(): static
    {
        return $this->filter('finished');
    }

    public function createInvoice(int $contractId): object
    {
        return $this->client->put($this->getEndpoint()."/$contractId/createinvoice")->{$this->getSingularKey()};
    }

    public function increaseInvoiceCount(int $contractId): object
    {
        return $this->client->put($this->getEndpoint()."/$contractId/increaseinvoicecount")->{$this->getSingularKey()};
    }

    protected function getEndpoint(): string
    {
        return 'contracts';
    }
}

<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersDates;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersFilter;

class SupplierInvoice extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersDates;
    use FiltersFilter;

    public function cancelled(): static
    {
        $this->filter('cancelled');

        return $this;
    }

    public function paid(): static
    {
        $this->filter('fullypaid');

        return $this;
    }

    public function unpaid(): static
    {
        $this->filter('unpaid');

        return $this;
    }

    public function overdue(): static
    {
        $this->filter('unpaidoverdue');

        return $this;
    }

    public function unbooked(): static
    {
        $this->filter('unbooked');

        return $this;
    }

    public function pendingPayment(): static
    {
        $this->filter('pendingpayment');

        return $this;
    }

    public function bookkeep(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/bookkeep");
    }

    public function cancel(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/cancel");
    }

    public function credit(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/credit");
    }

    public function approvePayment(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/approvalpayment");
    }

    public function approveBookkeep(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/approvalbookkeep");
    }

    protected function getEndpoint(): string
    {
        return 'supplierinvoices';
    }
}

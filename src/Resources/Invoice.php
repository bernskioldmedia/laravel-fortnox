<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersDates;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersFilter;

class Invoice extends BaseResource
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

    public function markAsSent(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/externalprint");
    }

    public function markAsDone(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/warehouseready");
    }

    public function print(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/print");
    }

    public function sendViaEmail(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/email");
    }

    public function printReminder(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/printreminder");
    }

    public function preview(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/preview");
    }

    public function sendViaPrintingService(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/eprint");
    }

    public function sendElectronically(int $id): object
    {
        return $this->client->get($this->getEndpoint()."/$id/einvoice");
    }

    protected function getEndpoint(): string
    {
        return 'invoices';
    }
}

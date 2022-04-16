<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;

class SupplierInvoicePayment extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    public function bookkeep(int $id): object
    {
        return $this->client->put($this->getEndpoint()."/$id/bookkeep")->{$this->getSingularKey()};
    }

    protected function getEndpoint(): string
    {
        return 'supplierinvoicepayments';
    }
}

<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;

class Account extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    public function sru(string $sru): static
    {
        return $this->search('sru', $sru);
    }

    protected function getEndpoint(): string
    {
        return 'accounts';
    }
}

<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersFinancialYear;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\FiltersLastModified;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\HasPagination;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\Searchable;
use BernskioldMedia\Fortnox\Contracts\Resources\Filters\Sortable;
use BernskioldMedia\Fortnox\FortnoxClient;

abstract class BaseResource
{
    use Sortable;
    use Searchable;
    use HasPagination;
    use FiltersLastModified;
    use FiltersFinancialYear;

    public array $query = [];
    protected string $endpoint;

    public function __construct(
        public FortnoxClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;
}

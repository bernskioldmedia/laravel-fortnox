<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Deleteable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;

class Project extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    protected function getEndpoint(): string
    {
        return 'projects';
    }
}

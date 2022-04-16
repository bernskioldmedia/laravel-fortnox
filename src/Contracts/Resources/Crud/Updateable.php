<?php

namespace BernskioldMedia\Fortnox\Contracts\Resources\Crud;

trait Updateable
{
    public function update(int|string $id, array $data): object
    {
        return $this->client->put($this->getEndpoint()."/$id", $data)->{$this->getSingularKey()};
    }
}

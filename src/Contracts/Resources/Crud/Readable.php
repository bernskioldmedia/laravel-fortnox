<?php

namespace BernskioldMedia\Fortnox\Contracts\Resources\Crud;

trait Readable
{
    public function all(): object
    {
        return $this->client->get($this->getEndpoint(), $this->query);
    }

    public function get(string|int $id): object
    {
        return $this->client->get($this->getEndpoint().'/'.$id, $this->query);
    }
}

<?php

namespace BernskioldMedia\Fortnox\Contracts\Resources\Crud;

trait Createable
{
    public function create(array $data): object
    {
        return $this->client->post($this->getEndpoint(), $data)->{$this->getSingularKey()};
    }
}

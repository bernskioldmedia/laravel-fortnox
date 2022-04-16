<?php

namespace BernskioldMedia\Fortnox\Contracts\Resources\Crud;

trait Deleteable
{
    public function delete(int|string $id): bool
    {
        return $this->client->delete($this->getEndpoint()."/$id");
    }
}

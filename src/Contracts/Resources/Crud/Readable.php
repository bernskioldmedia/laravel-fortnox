<?php

namespace BernskioldMedia\Fortnox\Contracts\Resources\Crud;

use BernskioldMedia\Fortnox\Responses\ListResponse;

trait Readable
{
    public function all(): ListResponse
    {
        $raw = $this->client->get($this->getEndpoint(), $this->query);

        return new ListResponse($raw, $this->getPluralKey());
    }

    public function get(string|int $id): object
    {
        return $this->client->get($this->getEndpoint().'/'.$id, $this->query)->{$this->getSingularKey()};
    }
}

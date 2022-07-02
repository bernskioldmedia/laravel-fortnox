<?php

namespace BernskioldMedia\Fortnox\Resources;

use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Createable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Readable;
use BernskioldMedia\Fortnox\Contracts\Resources\Crud\Updateable;

class Supplier extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;

    public function city(string $city): static
    {
        return $this->search('City', $city);
    }

    public function email(string $email): static
    {
        return $this->search('Email', $email);
    }

    public function name(string $name): static
    {
        return $this->search('Name', $name);
    }

    public function organizationNumber(string $orgNumber): static
    {
        return $this->search('OrganisationNumber', $orgNumber);
    }

    public function phone(string $phone): static
    {
        return $this->search('Phone1', $phone);
    }

    public function postalCode(string $postalCode): static
    {
        return $this->search('ZipCode', $postalCode);
    }

    protected function getEndpoint(): string
    {
        return 'suppliers';
    }
}

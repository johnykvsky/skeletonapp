<?php

namespace Customer\Domain;

class Customer
{
    public function __construct(private readonly string $name)
    {
    }

    public function name(): string
    {
        return $this->name;
    }
}

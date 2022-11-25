<?php

namespace Customer\Infrastructure;

use Customer\Domain\Customer;

class Customers implements \Customer\Domain\Customers
{
    public function store(Customer $customer): void
    {
    }
}
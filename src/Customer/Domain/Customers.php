<?php

namespace Customer\Domain;

interface Customers
{
    public function store(Customer $customer): void;
}

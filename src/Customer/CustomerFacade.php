<?php

namespace Customer;

use Customer\Application\Customer;
use Customer\Application\CustomerQuery;

class CustomerFacade
{
    public function __construct(private readonly CustomerQuery $customerQuery)
    {
    }

    public function customer(int $customerId): Customer
    {
        return $this->customerQuery->getById($customerId);
    }
}

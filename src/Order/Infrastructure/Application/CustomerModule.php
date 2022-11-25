<?php

namespace Order\Infrastructure\Application;

use Customer\CustomerFacade;
use Order\Application\Customer;

class CustomerModule implements \Order\Application\CustomerModule
{
    public function __construct(private readonly CustomerFacade $customerFacade)
    {
    }

    public function customer(int $customerId): Customer
    {
        $customer = $this->customerFacade->customer($customerId);
        return new Customer($customer->name());
    }
}
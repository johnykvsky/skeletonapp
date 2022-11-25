<?php

namespace Order\UI;

use Customer\CustomerFacade;

class CustomerModule implements CustomerModuleInterface
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
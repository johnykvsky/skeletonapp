<?php

namespace Customer\Infrastructure;

use Customer\CustomerFacade;

class CustomerFactory
{
    public static function create(CustomerDbal $customerDbal): CustomerFacade
    {
        return new CustomerFacade($customerDbal);
    }
}
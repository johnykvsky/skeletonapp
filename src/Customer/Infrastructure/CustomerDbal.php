<?php

namespace Customer\Infrastructure;

use Customer\Application\Customer;
use Customer\Application\CustomerQuery;

class CustomerDbal implements CustomerQuery
{
    public function getById(int $customerId): Customer
    {
        return new Customer('Steven');
    }
}
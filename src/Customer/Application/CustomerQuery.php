<?php

namespace Customer\Application;

interface CustomerQuery
{
    public function getById(int $customerId): Customer;
}
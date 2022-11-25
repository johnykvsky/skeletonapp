<?php

namespace Order\Application;

interface CustomerModule
{
    public function customer(int $customerId): Customer;
}
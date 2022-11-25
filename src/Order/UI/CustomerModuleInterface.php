<?php

namespace Order\UI;

interface CustomerModuleInterface
{
    public function customer(int $customerId): Customer;
}
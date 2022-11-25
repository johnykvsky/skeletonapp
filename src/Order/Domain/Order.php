<?php

namespace Order\Domain;

class Order
{
    public function __construct(public readonly int $orderId) {
    }

    public function orderId(): int
    {
        return $this->orderId;
    }
}

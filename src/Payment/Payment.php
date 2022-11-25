<?php

namespace Payment;

class Payment
{
    private int $amount;

    public function __construct(int $amount) {
        $this->amount = $amount;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}

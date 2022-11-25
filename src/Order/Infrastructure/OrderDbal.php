<?php

namespace Order\Infrastructure;

use Order\Application\Order;
use Order\Application\OrderQuery;

class OrderDbal implements OrderQuery
{
    public function getById(int $orderId): Order
    {
        return new Order(115);
    }
}
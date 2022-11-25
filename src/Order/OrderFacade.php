<?php

namespace Order;

use Order\Application\Order;
use Order\Application\OrderQuery;

class OrderFacade
{
    public function __construct(private readonly OrderQuery $orderQuery)
    {
    }

    public function order(int $orderId): Order
    {
        return $this->orderQuery->getById($orderId);
    }
}

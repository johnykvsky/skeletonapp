<?php

namespace Order\Infrastructure;

use Order\OrderFacade;

class OrderFactory
{
    public static function create(OrderDbal $orderDbal): OrderFacade
    {
        return new OrderFacade($orderDbal);
    }
}
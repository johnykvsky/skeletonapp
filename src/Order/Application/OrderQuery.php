<?php

namespace Order\Application;

interface OrderQuery
{
    public function getById(int $orderId): Order;
}
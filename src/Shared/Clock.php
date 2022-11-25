<?php

namespace Shared;

class Clock
{
    public function current(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
}

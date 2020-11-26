<?php

namespace Worldpay\SessionDrivers;

use Worldpay\Interfaces\SessionDriverInterface;

class LaravelSessionDriver implements SessionDriverInterface
{

    public function initialize(): void
    {
        // No initialization required.
    }

    public function put(string $key, $value): void
    {
        session([$key => $value]);
    }

    public function get(string $key)
    {
        return session($key);
    }
}
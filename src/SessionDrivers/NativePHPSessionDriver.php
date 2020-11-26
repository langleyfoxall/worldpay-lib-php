<?php

namespace Worldpay\SessionDrivers;

use Worldpay\Interfaces\SessionDriverInterface;

class NativePHPSessionDriver implements SessionDriverInterface
{

    public function initialize(): void
    {
        session_start();
    }

    public function put(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key)
    {
        return $_SESSION[$key];
    }
}
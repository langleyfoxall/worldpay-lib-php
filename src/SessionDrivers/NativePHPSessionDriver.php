<?php

namespace LangleyFoxall\Worldpay\SessionDrivers;

use LangleyFoxall\Worldpay\Interfaces\SessionDriverInterface;

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
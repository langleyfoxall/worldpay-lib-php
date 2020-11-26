<?php

namespace LangleyFoxall\Worldpay;

use Exception;
use Worldpay\Interfaces\SessionDriverInterface;

abstract class WorldPaySessionHandler
{
    private static $driver;

    /**
     * Retrieves the currently set session driver.
     *
     * @return SessionDriverInterface
     * @throws Exception
     */
    private static function getDriver(): SessionDriverInterface
    {
        if (!self::$driver) {
            throw new Exception('No WorldPay session driver set. Please call WorldPaySessionHandler::setDriver() with an appropriate driver.');
        }

        return self::$driver;
    }

    /**
     * Sets a session driver.
     *
     * @param SessionDriverInterface $driver
     */
    public static function setDriver(SessionDriverInterface $driver): void
    {
        self::$driver = $driver;
        self::$driver->initialize();
    }

    /**
     * Put a value into the session with an associated key.
     *
     * @param string $key
     * @param $value
     * @throws Exception
     */
    public static function put(string $key, $value): void
    {
        self::getDriver()->put($key, $value);
    }

    /**
     * Retrieves a value from the session by key.
     *
     * @param string $key
     * @throws Exception
     */
    public static function get(string $key)
    {
        return self::getDriver()->get($key);
    }
}
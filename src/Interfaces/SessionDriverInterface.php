<?php

namespace Worldpay\Interfaces;

interface SessionDriverInterface
{
    /**
     * Initialize the session driver if required.
     *
     * @return void
     */
    public function initialize(): void;


    /**
     * Puts a value in the session based on its key.
     *
     * @param string $key
     * @param $value
     * @return void
     */
    public function put(string $key, $value): void;


    /**
     * Retrieves a value from the session based on its key.
     *
     * @param string $key
     * @return mixed
     */
    public function get(string $key);
}
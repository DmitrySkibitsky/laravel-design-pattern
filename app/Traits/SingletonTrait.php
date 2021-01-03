<?php

namespace App\Traits;

trait SingletonTrait
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * getInstance
     *
     * @return SingletonTrait|null
     */
    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}

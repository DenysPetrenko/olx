<?php

/**
 * /* @ author Denys Petrenko < Des . Petrenko @ gmail . com >
 * Singlton
 */


final class Config
{
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        $cls = __CLASS__;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new Config();
        }

        return self::$instances[$cls];
    }
}
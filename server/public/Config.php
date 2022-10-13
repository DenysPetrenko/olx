<?php

class Config
{
    protected $pdo;
    protected static $instance;

    protected function __construct()
    {

    }

    protected function __clone()
    {
    }


    public static function getInstance(): Config
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}


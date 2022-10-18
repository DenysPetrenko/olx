<?php

class Config
{
    private static $instance = null;
    protected $pdo;


    protected function __construct()
    {
        $db = require 'config/config.php';

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->pdo = new PDO($db['dns'], $db['username'], $db['password'], $options);
            echo 'connect';
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

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

    public function test()
    {
        var_dump($this);
    }
}


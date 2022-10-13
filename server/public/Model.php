<?php

namespace Models;


use Config;
use PDO;
use PDOException;


require_once 'Config.php';

class Model extends Config
{

    public function db()
    {
        try {
            $config = Config::getInstance();
            $db = require 'config/config.php';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];


            $connDb = new PDO($db['dns'], $db['username'], $db['password'], $options);
            $connDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        var_dump($connDb);

    }


    public function selectAllBySQL()
    {

    }
}
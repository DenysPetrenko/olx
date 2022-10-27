<?php

/* @ author Denys Petrenko < Des . Petrenko @ gmail . com >
 * singlton
 */
class ConfigDb
{

    private static ?ConfigDb $instance = null;
    protected PDO $pdo;


    protected function __construct()
    {


        $db = require 'config/config.php';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        try {
            $this->pdo = new PDO($db['dns'], $db['username'], $db['password'], $options);
            echo 'connect to DB';

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();

        }
    }

    protected
    function __clone()
    {
    }


    public
    static function getInstance(): ConfigDb
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnect(): ?PDO
    {
        try {
            return self::getInstance()->pdo;
        } catch (Exception $exception) {
            echo "I was unable to open a connection to the database. " . $exception->getMessage();
            return null;
        }


    }

    public function getPdo(string $query): array
    {

        return $this->pdo->query($query)->fetchAll();

    }

    public
    function test(): void
    {
        var_dump($this);
    }
}


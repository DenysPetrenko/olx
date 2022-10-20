<?php

namespace Models;

use _PHPStan_acbb55bae\React\Dns\Config\Config;
use PDO;
use PDOException;


class Model
{
    protected string $table;


    /**
     * @return \ConfigDb
     */
    public function db(): \ConfigDb
    {
        return \ConfigDb::getInstance();
    }


    public function getAllBySQL(): void
    {

        $query = 'SELECT * FROM `payments`';
        $data = $this->db()->getPdo($query);
        var_dump($data);
    }


    public function getOneBySql(): void
    {
        $query = 'SELECT * FROM `payments` LIMIT 1';
        $data = $this->db()->getPdo($query);
        var_dump($data);
    }

    public function addToDb(): void
    {
        $query = "INSERT INTO `test` ( `name`, `second`) VALUES ('ddddd', '2')";
        $data = $this->db()->getPdo($query);
        var_dump($data);
    }

    public function upToDb(): void
    {
        $query = "UPDATE `test` SET `name`='name',`second`='2' WHERE id = 1";
        $data = $this->db()->getPdo($query);
        var_dump($data);
    }

    public function delFromDb(): void
    {
        $query = "DELETE FROM `test` WHERE id = 2";
        $data = $this->db()->getPdo($query);
        var_dump($data);

    }

    public function sortBySql()
    {
        $query = "SELECT * FROM `test` ORDER BY id";
        $data = $this->db()->getPdo($query);
        var_dump($data);

    }

}
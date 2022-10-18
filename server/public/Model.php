<?php

namespace Models;

use _PHPStan_acbb55bae\React\Dns\Config\Config;
use PDO;
use PDOException;


class Model
{
    protected string $table;

    /**
     * @return \Config
     */
    public function db(): \Config
    {
        return \Config::getInstance();
    }

    public function getAllBySQL(): void
    {
        $query = 'SELECT * FROM `payments`';
        $result = $this->db()->query($query);
    }

    public function getOneBySql(): void
    {

    }
}
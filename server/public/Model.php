<?php

namespace Models;

use _PHPStan_acbb55bae\React\Dns\Config\Config;
use ConfigDb;
use PDO;
use PDOException;

/* @ author Denys Petrenko < Des . Petrenko @ gmail . com >
 */
class Model
{
    /**
     * @var string
     */
    protected string $tableName;
    /**
     * @var string
     */
    protected string $params;


    /**
     * @return ConfigDb
     */
    public function db(): ConfigDb
    {
        return ConfigDb::getInstance();
    }

    /**
     * @param string $tableName
     * @return array
     */
    public function getAllBySQL(string $tableName): array
    {
        $query = "SELECT * FROM `{$tableName}`";
        return $this->db()->getPdo($query);
    }

    /**
     * @param string $tableName
     * @return array
     */
    public function getOneBySql(string $tableName): array
    {
        $query = "SELECT * FROM {$tableName} LIMIT 1";
        return $this->db()->getPdo($query);

    }

    public function addToDb(string $tableName, array $params): void
    {

        $columns = implode(',', $params);
        // разделяем  входной массив через сепаратор в строку
        $escVal = array_map(array($this->db()->getConnect(), 'quote'), $params);
//        $escVal = array_map([$this->db()->getPdo(), 'quote'], array_values($params));
//        прогоняем масив для избавления от спецсимволо
        $values = implode(',', $escVal);
//        из второго массива
        $query = "INSERT INTO `{$tableName}` ($columns) VALUES ($values)";
        $data = $this->db()->getConnect()->query($query);
//        $data = $this->db()->getPdo($query);
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

    public function sortBySql(): void
    {
        $query = "SELECT * FROM `test` ORDER BY id";
        $data = $this->db()->getPdo($query);
        var_dump($data);

    }

}
<?php
class ConnDB {
    public function connDb()
    {
        try {


            $db = require 'config/config.php';
            $conn = new PDO($db['dns'], $db['username'], $db['password']);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

}

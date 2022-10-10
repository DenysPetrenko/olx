<?php

namespace Models;
require_once 'ConnDb.php';
require_once 'Config.php';
class Model
{

    public function db(): \ConnDB
    {
        $config = \Config::getInstance();
        return new \ConnDB();
    }
    
    
    public function selectAllBySQL()
    {
        
    }
}
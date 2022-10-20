<?php
require '../vendor/autoload.php';

define('ROOT', dirname(__DIR__));

use Models\Model;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(ROOT . '/.env');


require 'ConfigDb.php';
require 'Model.php';

$test = new Model();
$test->sortBySql();
print_r($test);

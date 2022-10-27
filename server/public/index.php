<?php
require '../vendor/autoload.php';

define('ROOT', dirname(__DIR__));

use Models\Model;
use Models\UserModel;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(ROOT . '/.env');


require 'ConfigDb.php';
require 'Model.php';
require 'models/UserModel.php';

$test = new Model();
$arr = ['ivan', 33];
$test->addToDb('test', $arr);
var_dump($test);
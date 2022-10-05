<?php
require '../vendor/autoload.php';

define('ROOT', dirname(__DIR__));

use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(ROOT . '/.env');

require 'connDb.php';

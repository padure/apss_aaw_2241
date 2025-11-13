<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../app/routes.php";
$app->run();
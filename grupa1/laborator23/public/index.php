<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;

$app = AppFactory::create();
$app->addRoutingMiddleware();
$methodOverrideMiddleware = new MethodOverrideMiddleware();
$app->add($methodOverrideMiddleware);

require_once __DIR__ . "/../config/database.php";
require_once __DIR__ . "/../app/routes.php";
$app->run();
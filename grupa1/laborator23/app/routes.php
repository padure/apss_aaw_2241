<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

$app->get("/", [HomeController::class, 'index']);
$app->get("/cars", [CarController::class, 'index']);
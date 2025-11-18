<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

$app->get("/", [HomeController::class, 'index']);
//Cars
$app->get("/cars", [CarController::class, 'index']);
$app->get("/cars/{car}", [CarController::class, 'show']);
$app->get("/cars/{car}/edit", [CarController::class, 'edit']);
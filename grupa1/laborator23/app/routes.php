<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

$app->get("/", [HomeController::class, 'index']);
//Cars
$app->get("/cars", [CarController::class, 'index']);
$app->get("/cars/create", [CarController::class, 'create']);
$app->get("/cars/{car}/edit", [CarController::class, 'edit']);
$app->get("/cars/{car}", [CarController::class, 'show']);
$app->put("/cars/{car}", [CarController::class, 'update']);
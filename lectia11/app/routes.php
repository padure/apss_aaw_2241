<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

//Home
$app->get("/", [HomeController::class, 'index']);
//Cars
$app->get("/cars", [CarController::class, 'index']);

<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;
use App\Controllers\MechanicController;

//Home
$app->get("/", [HomeController::class, 'index']);
//Cars
$app->get("/cars", [CarController::class, 'index']);
//Mechanic
$app->get("/mechanics", [MechanicController::class, 'index']);

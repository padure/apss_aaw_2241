<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

$app->get("/", [HomeController::class, 'index']);
//Cars
$app->get("/cars", [CarController::class, 'index']);
$app->get("/cars/{car}", [CarController::class, 'show']);
//Creare
$app->post("/cars", [CarController::class, 'store']);
$app->get("/cars/create", [CarController::class, 'create']);
//Editare
$app->get("/cars/{car}/edit", [CarController::class, 'edit']);
$app->put("/cars/{car}", [CarController::class, 'update']);
//Stergere
$app->delete("/cars/{car}", [CarController::class, 'delete']);
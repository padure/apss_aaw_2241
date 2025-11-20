<?php

use App\Controllers\HomeController;
use App\Controllers\CarController;

$app->get("/", [HomeController::class, 'index']);
//Creare
$app->get("/cars/create", [CarController::class, 'create']);
$app->post("/cars", [CarController::class, 'store']);
//Cars
$app->get("/cars", [CarController::class, 'index']);
$app->get("/cars/{car}", [CarController::class, 'show']);
//Editare
$app->get("/cars/{car}/edit", [CarController::class, 'edit']);
$app->put("/cars/{car}", [CarController::class, 'update']);
//Stergere
$app->delete("/cars/{car}", [CarController::class, 'delete']);

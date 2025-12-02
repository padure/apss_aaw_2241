<?php

use App\Controllers\HomeController;
use App\Controllers\ReportController;

$app->get("/", [HomeController::class, 'index']);
$app->get("/reports", [ReportController::class, 'index']);

<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Controllers\BookController;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/test', function(Request $request, Response $response, $args){
    $response->getBody()->write("Test");
    return $response;
});

$app->get("/books", [BookController::class, 'index']);
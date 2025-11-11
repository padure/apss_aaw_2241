<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Book;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/test', function(Request $request, Response $response, $args){
    $response->getBody()->write("Test");
    return $response;
});

$app->get("/books", function(Request $request, Response $response, $args){
    $books = Book::all();
    $response->getBody()->write($books->toJson());
    return $response->withHeader("Content-Type", 'application/json');
});
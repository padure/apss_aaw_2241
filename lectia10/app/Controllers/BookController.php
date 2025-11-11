<?php

namespace App\Controllers;

use App\Models\Book;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BookController
{
    public function index(Request $request, Response $response, $args)
    {
        $books = Book::all();
        $response->getBody()->write($books->toJson());
        return $response->withHeader("Content-Type", 'application/json');
    }
}
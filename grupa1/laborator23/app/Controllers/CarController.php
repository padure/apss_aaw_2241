<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CarController{
    public function index(Request $request, Response $response, $args){
        $response->getBody()->write("Car");
        return $response;
    }
}
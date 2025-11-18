<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller{
    public function index(Request $request, Response $response, $args){
        $cars = Car::all();
        $response->getBody()->write($this->view('cars/index.view.php', [
            'cars' => $cars
        ]));
        return $response;
    }
    public function create(Request $request, Response $response, $args){
        $response->getBody()->write($this->view('cars/create.view.php'));
        return $response;
    }
    
    public function store(Request $request, Response $response, $args){
        $data = $request->getParsedBody();
        Car::create($data);
        return $response
            ->withStatus(302)
            ->withHeader('Location', '/cars');
    }

    public function show(Request $request, Response $response, $args){
        $car = Car::find($args['car']);
        $response->getBody()->write($this->view('cars/show.view.php', [
            'car' => $car
        ]));
        return $response;
    }
    
    public function edit(Request $request, Response $response, $args){
        $car = Car::find($args['car']);
        $response->getBody()->write($this->view('cars/edit.view.php', [
            'car' => $car
        ]));
        return $response;
    }
    
    public function update(Request $request, Response $response, $args){
        $car = Car::find($args['car']);
        $data = $request->getParsedBody();
        $car->fill($data);
        $car->save();
        return $response
            ->withStatus(302)
            ->withHeader('Location', '/cars');
    }
}
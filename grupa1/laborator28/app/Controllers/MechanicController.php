<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;
use App\Models\Mechanic;

class MechanicController extends Controller{
    public function index(Request $request, Response $response){
        $mechanics = Mechanic::all();
        $response->getBody()->write($this->view('mechanics/index.view.php',[
            'mechanics' => $mechanics
        ]));
        return $response;
    }
}
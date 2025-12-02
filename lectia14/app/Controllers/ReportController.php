<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller{
    public function index(Request $request, Response $response){
        $reports = Report::all();
        $response->getBody()->write($this->view('reports/index.view.php',  [
            'reports' => $reports
        ]));
        return $response;
    }
}
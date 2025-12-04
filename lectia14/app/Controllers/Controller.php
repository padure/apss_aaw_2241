<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;

class Controller
{
    public function render(Response $response, string $view, array $data = []): Response
    {
        // 1. pregătim variabilele pentru view
        extract($data);
        // 2. construim calea către view-ul specific
        $viewPath = __DIR__ . '/../../views/' . $view . '.view.php';

        // 3. randăm view-ul specific în buffer
        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        // 4. randăm layoutul principal, pasând $content + restul variabilelor
        ob_start();
        require __DIR__ . '/../../views/layouts/app.view.php';
        $html = ob_get_clean();

        $response->getBody()->write($html);
        return $response;
    }
}
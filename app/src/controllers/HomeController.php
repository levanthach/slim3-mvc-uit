<?php
namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController extends BaseController
{
    public function homePage(Request $request, Response $response, $args)
    {
        // $this->logger->info("Home page action dispatched");

        // $this->flash->addMessage('info', 'Sample flash message');

        $this->view->render($response, 'index.twig');
        return $response;
    }

    public function about(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'about.twig');
        return $response;
    }

      public function contact(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'contact.twig');
        return $response;
    }
}
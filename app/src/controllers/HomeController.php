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

    public function exchange(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'exchange.twig');
        return $response;
    }

    public function services(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'services.twig');
        return $response;
    }

    public function news(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'news.twig');
        return $response;
    }

     public function news_detail(Request $request, Response $response, $args)
    {

        $this->view->render($response, 'news-detail.twig');
        return $response;
    }
}

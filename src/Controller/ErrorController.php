<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ErrorController extends AbstractController
{
    #[Route('/error-403', name: 'app_errore')]
    public function forbidden(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error403.html.twig', [
            'controller_name' => 'ErrorController',
        ]);
    }

    #[Route('/error-404', name: 'app_error')]
    public function notFound(): Response
    {
        return $this->render('bundles/TwigBundle/Exception/error404.html.twig', [
            'controller_name' => 'ErrorController',
        ]);
    }
}

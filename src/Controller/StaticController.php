<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StaticController extends AbstractController
{
     #[Route('/legals', name: 'app_legals_notices')]
    public function notices(): Response
    {
        return $this->render('static/legals_notices.html.twig');
    }

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('static/privacy.html.twig');
    }

    #[Route('/cookies', name: 'app_cookies')]
    public function cookies(): Response
    {
        return $this->render('static/cookies.html.twig');
    }

    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('static/cgu.html.twig');
    }

    #[Route('/cgv', name: 'app_cgv')]
    public function cgv(): Response
    {
        return $this->render('static/cgv.html.twig');
    }

    #[Route('/accessibility', name: 'app_accessibility')]
    public function accessibility(): Response
    {
        return $this->render('static/accessibility.html.twig');
    }
}

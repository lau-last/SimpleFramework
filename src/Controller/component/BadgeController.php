<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BadgeController extends AbstractController
{
    #[Route('/badge', name: 'app_badge')]
    public function index(): Response
    {
        return $this->render('component/badge/index.html.twig');
    }
}

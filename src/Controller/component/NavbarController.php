<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NavbarController extends AbstractController
{
    #[Route('/navbar', name: 'app_navbar')]
    public function index(): Response
    {
        return $this->render('component/navbar/index.html.twig');
    }
}

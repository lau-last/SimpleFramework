<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NavbarSideController extends AbstractController
{
    #[Route('/navbar/side', name: 'app_navbar_side')]
    public function index(): Response
    {
        return $this->render('navbar_side/index.html.twig');
    }
}

<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SizingController extends AbstractController
{
    #[Route('/sizing', name: 'app_sizing')]
    public function index(): Response
    {
        return $this->render('utility/sizing/index.html.twig');
    }
}

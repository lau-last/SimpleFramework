<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ColorController extends AbstractController
{
    #[Route('/color', name: 'app_color')]
    public function index(): Response
    {
        return $this->render('utility/color/index.html.twig');
    }
}

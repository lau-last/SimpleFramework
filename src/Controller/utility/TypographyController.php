<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TypographyController extends AbstractController
{
    #[Route('/typography', name: 'app_typography')]
    public function index(): Response
    {
        return $this->render('utility/typography/index.html.twig');
    }
}

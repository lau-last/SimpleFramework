<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BorderController extends AbstractController
{
    #[Route('/border', name: 'app_border')]
    public function index(): Response
    {
        return $this->render('utility/border/index.html.twig');
    }
}

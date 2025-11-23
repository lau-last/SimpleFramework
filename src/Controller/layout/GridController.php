<?php

namespace App\Controller\layout;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GridController extends AbstractController
{
    #[Route('/grid', name: 'app_grid')]
    public function index(): Response
    {
        return $this->render('layout/grid/index.html.twig');
    }
}

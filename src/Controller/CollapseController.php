<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CollapseController extends AbstractController
{
    #[Route('/collapse', name: 'app_collapse')]
    public function index(): Response
    {
        return $this->render('collapse/index.html.twig');
    }
}

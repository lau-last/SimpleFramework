<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CollapseController extends AbstractController
{
    #[Route('/collapse', name: 'app_collapse')]
    public function index(): Response
    {
        return $this->render('component/collapse/index.html.twig');
    }
}

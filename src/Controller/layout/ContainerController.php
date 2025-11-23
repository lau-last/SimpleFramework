<?php

namespace App\Controller\layout;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContainerController extends AbstractController
{
    #[Route('/container', name: 'app_container')]
    public function index(): Response
    {
        return $this->render('layout/container/index.html.twig');
    }
}

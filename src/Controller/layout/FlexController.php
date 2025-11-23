<?php

namespace App\Controller\layout;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FlexController extends AbstractController
{
    #[Route('/flex', name: 'app_flex')]
    public function index(): Response
    {
        return $this->render('layout/flex/index.html.twig');
    }
}

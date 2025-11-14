<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ButtonController extends AbstractController
{
    #[Route('/button', name: 'app_button')]
    public function index(): Response
    {
        return $this->render('button/index.html.twig');
    }
}

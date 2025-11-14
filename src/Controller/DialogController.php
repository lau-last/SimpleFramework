<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DialogController extends AbstractController
{
    #[Route('/dialog', name: 'app_dialog')]
    public function index(): Response
    {
        return $this->render('dialog/index.html.twig');
    }
}

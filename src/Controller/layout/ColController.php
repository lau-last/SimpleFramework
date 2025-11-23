<?php

namespace App\Controller\layout;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ColController extends AbstractController
{
    #[Route('/col', name: 'app_col')]
    public function index(): Response
    {
        return $this->render('layout/col/index.html.twig');
    }
}

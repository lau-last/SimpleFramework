<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CardController extends AbstractController
{
    #[Route('/card', name: 'app_card')]
    public function index(): Response
    {
        return $this->render('component/card/index.html.twig');
    }
}

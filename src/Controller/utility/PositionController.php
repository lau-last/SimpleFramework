<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PositionController extends AbstractController
{
    #[Route('/position', name: 'app_position')]
    public function index(): Response
    {
        return $this->render('utility/position/index.html.twig');
    }
}

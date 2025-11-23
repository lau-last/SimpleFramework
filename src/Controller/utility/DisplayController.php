<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DisplayController extends AbstractController
{
    #[Route('/display', name: 'app_display')]
    public function index(): Response
    {
        return $this->render('utility/display/index.html.twig');
    }
}

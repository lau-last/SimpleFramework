<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SpacingController extends AbstractController
{
    #[Route('/spacing', name: 'app_spacing')]
    public function index(): Response
    {
        return $this->render('utility/spacing/index.html.twig');
    }
}

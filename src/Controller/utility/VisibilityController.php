<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VisibilityController extends AbstractController
{
    #[Route('/visibility', name: 'app_visibility')]
    public function index(): Response
    {
        return $this->render('utility/visibility/index.html.twig');
    }
}

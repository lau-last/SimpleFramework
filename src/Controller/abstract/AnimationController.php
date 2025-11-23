<?php

namespace App\Controller\abstract;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnimationController extends AbstractController
{
    #[Route('/animation', name: 'app_animation')]
    public function index(): Response
    {
        return $this->render('abstract/animation/index.html.twig');
    }
}

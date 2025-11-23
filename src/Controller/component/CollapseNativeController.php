<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CollapseNativeController extends AbstractController
{
    #[Route('/collapse/native', name: 'app_collapse_native')]
    public function index(): Response
    {
        return $this->render('component/collapse_native/index.html.twig');
    }
}

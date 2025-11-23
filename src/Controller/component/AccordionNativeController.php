<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccordionNativeController extends AbstractController
{
    #[Route('/accordion-native', name: 'app_accordion_native')]
    public function index(): Response
    {
        return $this->render('component/accordion_native/index.html.twig');
    }
}

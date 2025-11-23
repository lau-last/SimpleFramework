<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccordionController extends AbstractController
{
    #[Route('/accordion', name: 'app_accordion')]
    public function index(): Response
    {
        return $this->render('component/accordion/index.html.twig');
    }
}

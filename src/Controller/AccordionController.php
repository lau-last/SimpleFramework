<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccordionController extends AbstractController
{
    #[Route('/accordion', name: 'app_accordion')]
    public function index(): Response
    {
        return $this->render('accordion/index.html.twig');
    }
}

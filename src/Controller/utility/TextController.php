<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TextController extends AbstractController
{
    #[Route('/text', name: 'app_text')]
    public function index(): Response
    {
        return $this->render('utility/text/index.html.twig');
    }
}

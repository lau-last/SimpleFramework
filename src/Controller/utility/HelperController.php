<?php

namespace App\Controller\utility;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HelperController extends AbstractController
{
    #[Route('/helper', name: 'app_helper')]
    public function index(): Response
    {
        return $this->render('utility/helper/index.html.twig');
    }
}

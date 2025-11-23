<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AlertController extends AbstractController
{
    #[Route('/alert', name: 'app_alert')]
    public function index(): Response
    {
        return $this->render('component/alert/index.html.twig');
    }
}

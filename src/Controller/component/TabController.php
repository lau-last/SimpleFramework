<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TabController extends AbstractController
{
    #[Route('/tab', name: 'app_tab')]
    public function index(): Response
    {
        return $this->render('component/tab/index.html.twig');
    }
}

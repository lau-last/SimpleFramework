<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TableController extends AbstractController
{
    #[Route('/table', name: 'app_table')]
    public function index(): Response
    {
        return $this->render('component/table/index.html.twig');
    }
}

<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DropdownController extends AbstractController
{
    #[Route('/dropdown', name: 'app_dropdown')]
    public function index(): Response
    {
        return $this->render('component/dropdown/index.html.twig');
    }
}

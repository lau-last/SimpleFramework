<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DropdownNativeController extends AbstractController
{
    #[Route('/dropdown/native', name: 'app_dropdown_native')]
    public function index(): Response
    {
        return $this->render('dropdown_native/index.html.twig', [
            'controller_name' => 'DropdownNativeController',
        ]);
    }
}

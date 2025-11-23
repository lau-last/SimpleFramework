<?php

namespace App\Controller\component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DropdownNativeController extends AbstractController
{
    #[Route('/dropdown/native', name: 'app_dropdown_native')]
    public function index(): Response
    {
        return $this->render('component/dropdown_native/index.html.twig', [
            'controller_name' => 'DropdownNativeController',
        ]);
    }
}

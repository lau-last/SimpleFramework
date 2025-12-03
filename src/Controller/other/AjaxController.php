<?php

namespace App\Controller\other;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AjaxController extends AbstractController
{
    #[Route('/ajax', name: 'app_ajax')]
    public function index(): Response
    {
        return $this->render('other/ajax/index.html.twig');
    }

    #[Route('/demo/ajax/get', name: 'ajax_demo_get')]
    public function ajaxDemoGet(): Response
    {
        return $this->render('other/ajax/_simple_get.html.twig');
    }

    #[Route('/demo/ajax/post', name: 'ajax_demo_post')]
    public function ajaxDemoPost(Request $request): Response
    {
        $message = $request->request->get('message', 'No message provided');

        return $this->render('other/ajax/_form_post.html.twig', [
            'message' => $message,
        ]);
    }

    #[Route('/demo/ajax/fragment', name: 'ajax_demo_fragment')]
    public function ajaxDemoFragment(Request $request): Response
    {
        return $this->render('other/ajax/_fragment.html.twig', [
            'text' => $request->request->get('text', 'No text provided'),
        ]);
    }

    #[Route('/demo/ajax/list', name: 'ajax_demo_list')]
    public function ajaxDemoList(Request $request): Response
    {
        $page  = (int) $request->request->get('page', 1);
        $limit = (int) $request->request->get('limit', 5);

        $allItems = [];
        for ($i = 1; $i <= 50; $i++) {
            $allItems[] = "Item $i";
        }

        $offset = max(0, ($page - 1) * $limit);
        $items  = array_slice($allItems, $offset, $limit);

        return $this->render('_fragment.html.twig', [
            'items' => $items,
            'page'  => $page,
            'limit' => $limit,
        ]);
    }
}

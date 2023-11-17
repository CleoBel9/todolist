<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CoolStuffController extends AbstractController
{
    #[Route('/cool/stuff', name: 'app_cool_stuff')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CoolStuffController.php',
        ]);
    }

    #[Route('/blog/{slug}', name: 'app_blog_slug', requirements: ['slug' => '[a-z]+'])]
    public function slug($slug)
    {
        return $this->json("Liste des slug " . $slug);
    }

    #[Route('/blog/{page}', name: 'app_blog_page', requirements: ['page' => '\d+'])]
    public function blog($page)
    {
        return $this->json("Afficher le n° de la page " . $page);
    }


    #[Route('/blog/', name: 'app_blog')]
    public function test()
    {
        return $this->json("liste des articles");
    }
}

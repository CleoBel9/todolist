<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\Cloner\Data;


class PosteController extends AbstractController
{
    #[Route('/poste', name: 'app_poste')]
    public function index(): Response
    {
        require (__DIR__.'/../../data/posts/posts.php');
        $posts = json_decode($posts);

        dump($posts);
    
        return $this->render('poste/index.html.twig', [
            'controller_name' => 'PosteController',
            "posts" => $posts,
        ]);

    }
}

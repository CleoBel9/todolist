<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NiceSTuffController extends AbstractController
{
    #[Route('/nice/s/tuff', name: 'app_nice_s_tuff')]
    public function index(): Response
    {
        return $this->render('nice_s_tuff/index.html.twig', [
            'controller_name' => 'NiceSTuffController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //apres le ? c'est la valeur par defaut de l'url
    #[Route('/', name: 'home')]
    
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
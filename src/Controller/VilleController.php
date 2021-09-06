<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VilleController extends AbstractController
{
    #[Route('/exercice/{ville?paris}/{nombre?65000}', name: 'ville')]
    public function index(string $ville, int $nombre): Response


    {
        return $this->render('ville/index.html.twig', [
            'ville'=>$ville,
            'nombre'=>$nombre
        ]);
    }
}

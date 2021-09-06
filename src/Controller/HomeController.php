<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    //apres le ? c'est la valeur par defaut de l'url
    #[Route('/home/{prenom?World}/{age?20}', name: 'home')]

    public function index(string $prenom, int $age): Response
    {
        $jul = 'Fais le signe JUL';
        $pokemons = [
            'pikachu',
            'salameche',
            'carapuce'
        ];
        
        $ninjas = [
            'village'=> 'konoha',
            'renard' => 'Kyubi'
        ];

        return $this->render('home/index.html.twig',[
        'prenom'=>$prenom,
        'jul'=> $jul,
        'age'=> $age,
        'pokemons'=> $pokemons,
        'ninjas' => $ninjas
        ]);
    }
}
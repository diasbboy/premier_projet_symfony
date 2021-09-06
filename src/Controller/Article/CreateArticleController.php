<?php

namespace App\Controller\Article;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateArticleController extends AbstractController 
{
    /**
     * @Route("/article/creer", name="creer_article)
     */
    public function create()
    {
        return $this->render("article/creer.html.twig");
    }
}
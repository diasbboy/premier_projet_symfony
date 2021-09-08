<?php

namespace App\Controller\Article;

use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListArticleController extends AbstractController
{
    /**
     * @Route("/article/Liste", name="liste_article")
     */
    public function list(ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->findAll();

        return $this->render("article/list.html.twig",[
            'articles' => $articles
        ]);
    }
}
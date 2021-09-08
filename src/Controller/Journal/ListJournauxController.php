<?php

namespace App\Controller\Journal;

use App\Repository\JournalRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListJournauxController extends AbstractController
{
    /**
     * @Route("/journal/liste", name="liste_journaux")
     */
    public function list(JournalRepository $journalRepository)
    {
        $journaux = $journalRepository->findAll();

        return $this->render("journal/list.html.twig",[
            'journaux' => $journaux
        ]);
    }
    
}

<?php

namespace App\Controller\Journal;

use App\Entity\Journal;
use App\Form\JournalType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AjouterJournalController extends AbstractController
{
    /**
     * @Route("/admin/journal/ajouter", name="ajouter_journal")
     */
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
        $journal = new Journal();
        $form = $this->createForm(JournalType::class,$journal);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($journal);
            $em->flush();

            $this->addFlash('success', 'Le journal: '. $journal->getNom().',a bien été enregistré');
            
            return $this->redirectToRoute('ajouter_journal');
        }

        return $this->render("journal/ajouter.html.twig",[
            'formJournal' => $form->createView()
        ]);
    }
}
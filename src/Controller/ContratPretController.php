<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ContratPret;
use App\Form\ContratPretType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class ContratPretController extends AbstractController
{
    #[Route('/contrat/pret', name: 'app_contrat_pret')]
    public function index(): Response
    {
        return $this->render('contrat_pret/index.html.twig', [
            'controller_name' => 'ContratPretController',
        ]);
    }


    public function ajouterContratPret(ManagerRegistry $doctrine, Request $request){
        $contratPret = new contratPret();
        $form = $this->createForm(ContratPretType::class, $contratPret);
        $form->handleRequest($request);
        $dateJour = '';
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $contratPret = $form->getData();
    
                $entityManager = $doctrine->getManager();
                $entityManager->persist($contratPret);
                $entityManager->flush();
    
            return $this->render('pret/consulter.html.twig', ['pret' => $contratPret,]);
        }
        else
            {
                return $this->render('contrat_pret/ajouter.html.twig', array('2022-12-07' => $dateJour,'form' => $form->createView(),));
        }
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Eleve;
use App\Entity\Responsable;
use App\Entity\Inscription;


class EleveController extends AbstractController
{
    #[Route('/eleve', name: 'app_eleve')]
    public function index(): Response
    {
        return $this->render('eleve/index.html.twig', [
            'controller_name' => 'EleveController',
        ]);
    }


// Méthode consulterEleve, qui permet de retourner les informations d'un eleve

public function consulterEleve(ManagerRegistry $doctrine, int $id){

    $eleve= $doctrine->getRepository(Eleve::class)->find($id);

    if (!$eleve) {
        throw $this->createNotFoundException(
        'Aucun eleve trouvé avec le numéro '.$id
        );
    }

    return $this->render('eleve/consulter.html.twig', [
        'eleve' => $eleve,]);

}

// Fonction listant tous les élèves présents dans la base

public function listerEleve(ManagerRegistry $doctrine){

    $repository = $doctrine->getRepository(Eleve::class);

$eleves= $repository->findAll();
return $this->render('eleve/lister.html.twig', [
'pEleves' => $eleves,]);	

}


// Fonction permettant d'ajouter un élève depuis un formulaire

public function ajouterEleve(Request $request,ManagerRegistry $doctrine){
    $eleve = new Eleve();
	$form = $this->createForm(EleveType::class, $eleve);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
            $eleve = $form->getData();
 
            $entityManager = $doctrine->getManager();
            $entityManager->persist($eleve);
            $entityManager->flush();
 
	    return $this->render('eleve/consulter.html.twig', ['eleve' => $eleve,]);
	}
	else
        {
            return $this->render('eleve/ajouter.html.twig', array('form' => $form->createView(),));
	}
}


}

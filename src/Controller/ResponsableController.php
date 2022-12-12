<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Responsable;
use App\Entity\Eleve;
use App\Form\ResponsableType;
use App\Form\ResponsableModifierType;


class ResponsableController extends AbstractController
{
    #[Route('/responsable', name: 'app_responsable')]
    public function index(): Response
    {
        return $this->render('responsable/index.html.twig', [
            'controller_name' => 'ResponsableController',
        ]);
    }


// Méthode consulterResponsable, qui permet de retourner les informations d'un responsable

public function consulterResponsable(ManagerRegistry $doctrine, int $id){

    $responsable= $doctrine->getRepository(Responsable::class)->find($id);

    if (!$responsable) {
        throw $this->createNotFoundException(
        'Aucun responsable trouvé avec le numéro '.$id
        );
    }

    return $this->render('responsable/consulter.html.twig', [
        'responsable' => $responsable,]);

}

public function listerResponsable(ManagerRegistry $doctrine){

    $repository = $doctrine->getRepository(Responsable::class);

$responsables= $repository->findAll();
return $this->render('responsable/lister.html.twig', [
'pResponsables' => $responsables,]);	

}


public function ajouterResponsable(Request $request,ManagerRegistry $doctrine){
    $responsable = new responsable();
	$form = $this->createForm(ResponsableType::class, $responsable);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
            $responsable = $form->getData();
 
            $entityManager = $doctrine->getManager();
            $entityManager->persist($responsable);
            $entityManager->flush();
 
	    return $this->render('responsable/consulter.html.twig', ['responsable' => $responsable,]);
	}
	else
        {
            return $this->render('responsable/ajouter.html.twig', array('form' => $form->createView(),));
	}
}

public function modifierResponsable(ManagerRegistry $doctrine, $id, Request $request){
 
    //récupération du responsable dont l'id est passé en paramètre
    $responsable = $doctrine->getRepository(Responsable::class)->find($id);
 
    if (!$responsable) {
        throw $this->createNotFoundException('Aucun responsable trouvé avec le numéro '.$id);
    }
    else
    {
            $form = $this->createForm(ResponsableModifierType::class, $responsable);
            $form->handleRequest($request);
 
            if ($form->isSubmitted() && $form->isValid()) {
 
                 $responsable = $form->getData();
                 $entityManager = $doctrine->getManager();
                 $entityManager->persist($responsable);
                 $entityManager->flush();
                 return $this->render('responsable/consulter.html.twig', ['responsable' => $responsable,]);
           }
           else{
                return $this->render('responsable/modifier.html.twig', array('form' => $form->createView(),));
           }
        }
 }
}

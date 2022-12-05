<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Cours;
use App\Entity\Jour;
use App\Entity\TypeCours;
use App\Entity\TypeInstrument;
use App\Entity\Inscription;


class CoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(): Response
    {
        return $this->render('cours/index.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    public function listerCours(ManagerRegistry $doctrine){
        $repository = $doctrine->getRepository(Cours::class);
        $cours = $repository->findAll();
        return $this->render('cours/lister.html.twig', [
            'pCours' => $cours,]);	
            
    }

    
    /* Fonction consulterCours pour renvoyer toutes les informations d'un cours en fonction de l'id */

    public function consulterCours(ManagerRegistry $doctrine, int $id){
        $cours = $doctrine->getRepository(Cours::class)->find($id);

        if(!$cours){
            throw $this->createNotFoundException(
                'Aucun cours trouvé avec comme identifiant '.$id
            );
        }
        
        return $this->render('cours/consulter.html.twig', [
        'cours'=>$cours,]);
    }

}

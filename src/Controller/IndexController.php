<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Cours;
use App\Entity\Eleve;
use App\Entity\ClasseInstrument;


class IndexController extends AbstractController
{
    #[Route('', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
        ]);

    }


    public function accueil(ManagerRegistry $doctrine){
        $repository = $doctrine->getRepository(Cours::class);
        $cours = $repository->findAll();

        $repository = $doctrine->getRepository(ClasseInstrument::class);
        $instru = $repository->findAll();

        $repository = $doctrine->getRepository(Eleve::class);
        $eleves = $repository->findAll();


        return $this->render('index.html.twig', [
            'pCours' => $cours,
            'pClasseInstru' => $instru,
            'eleve' => $eleves,]);	
            
    }
}

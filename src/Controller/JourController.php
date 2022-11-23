<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JourController extends AbstractController
{
    #[Route('/jour', name: 'app_jour')]
    public function index(): Response
    {
        return $this->render('jour/index.html.twig', [
            'controller_name' => 'JourController',
        ]);
    }

    public function listerJour(ManagerRegistry $doctrine){
        $repository = $doctrine->getRepository(Jour::class);
        $jours = $repository->findAll();
        return $this->render('cours/lister.html.twig', [
            'pJours' => $jours,]);	
            
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Responsable;
use App\Entity\Eleve;


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

}

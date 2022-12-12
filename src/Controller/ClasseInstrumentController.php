<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Cours;
use App\Entity\ClasseInstrument;

class ClasseInstrumentController extends AbstractController
{
    #[Route('/classe/instrument', name: 'app_classe_instrument')]
    public function index(): Response
    {
        return $this->render('classe_instrument/index.html.twig', [
            'controller_name' => 'ClasseInstrumentController',
        ]);
    }

    public function consulterClasseInstrument(ManagerRegistry $doctrine, int $id){

        $classeInstrument= $doctrine->getRepository(ClasseInstrument::class)->find($id);

        if (!$classeInstrument) {
            throw $this->createNotFoundException(
            'Aucune classe trouvée avec le numéro '.$id
            );
        }
    
        return $this->render('classe_instrument/consulter.html.twig', [
            'classeInstrument' => $classeInstrument,]);
    
    }
}

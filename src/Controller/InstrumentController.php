<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Instrument;
use App\Entity\Accessoire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstrumentController extends AbstractController
{
    #[Route('/instrument', name: 'app_instrument')]
    public function index(): Response
    {
        return $this->render('instrument/index.html.twig', [
            'controller_name' => 'InstrumentController',
        ]);
    }
    public function listerInstruments(ManagerRegistry $doctrine){

        $repository = $doctrine->getRepository(Instrument::class);
    
    $instruments= $repository->findAll();
    return $this->render('instrument/lister.html.twig', [
    'pInstruments' => $instruments,]);	
    
    }

    public function consulterInstruments(managerRegistry $doctrine, int $id){
        
        $instrument = $doctrine->getRepository(Instrument::class)->find($id);
        $accessoire = $doctrine->getRepository(Accessoire::class)->findByInstrument($id);
        if (!$instrument) {
            throw $this->createNotFoundException(
            'Aucun responsable trouvé avec le numéro '.$id
            );
        }

        return $this->render('instrument/consulter.html.twig', [
            'instrument' => $instrument,
            'accessoire' => $accessoire]);


    }
}

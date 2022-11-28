<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Instrument;
use App\Entity\Accessoire;
use App\Entity\ContratPret;
use App\Entity\InterPret;
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

    public function consulterInstruments(managerRegistry $doctrine, int $id){
        
        $instrument = $doctrine->getRepository(Instrument::class)->find($id);
        $accessoire = $doctrine->getRepository(Accessoire::class)->findByInstrument($id);
        $contratPret = $doctrine->getRepository(ContratPret::class)->findByinstrument($id);
        $interventionPret = $doctrine->getRepository(InterPret::class)->findByContratPret($contratPret);
        if (!$instrument) {
            throw $this->createNotFoundException(
            'Aucun responsable trouvé avec le numéro '.$id
            );
        }

        return $this->render('instrument/consulter.html.twig', [
            'instrument' => $instrument,
            'accessoire' => $accessoire,
            'interventionPret' => $interventionPret,
            'contratPret' => $contratPret,]);


    }
}

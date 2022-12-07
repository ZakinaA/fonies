<?php

namespace App\Controller;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Instrument;
use App\Entity\InterPret;
use App\Form\InstrumentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
        if (!$instrument) {
            throw $this->createNotFoundException(
            'Aucun responsable trouvé avec le numéro '.$id
            );
        }

        return $this->render('instrument/consulter.html.twig', [
            'instrument' => $instrument,]);


    }

    public function ajouterInstruments(ManagerRegistry $doctrine,Request $request){
        
        $instrument = new instrument();
        $form = $this->createForm(InstrumentType::class, $instrument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $instrument = $form->getData();

            $entityManager = $doctrine->getManager();
            $entityManager->persist($instrument);
            $entityManager->flush();

            return $this->render('instrument/consulter.html.twig', ['instrument' => $instrument]);
        }
        else
        {
            return $this->render('instrument/ajouter.html.twig', array('form' => $form->createView(), ));
        }
        
    }
}

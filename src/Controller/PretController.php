<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Pret;
use App\Entity\InterPret;
use App\Entity\Instrument;
use App\Entity\Accessoire;
use App\Entity\ContratPret;

class PretController extends AbstractController
{
    #[Route('/pret', name: 'app_pret')]
    public function index(): Response
    {
        return $this->render('pret/index.html.twig', [
            'controller_name' => 'PretController',
        ]);
    }

    public function consulterPret(managerRegistry $doctrine, int $id)
    {
        $pret = $doctrine->getRepository(ContratPret::class)->find($id);
        if (!$pret) {
            throw $this->createNotFoundException(
            'Aucun prêt a été trouvé avec le numéro '.$id
            );
        }

        return $this->render('pret/consulter.html.twig', [
            '' => $pret,]);


    }

}

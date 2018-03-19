<?php

namespace App\Controller;

use App\Entity\Sponsor;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SponsorController extends Controller
{
    /**
     * @Route("/sponsor", name="sponsor")
     */
    public function index()
    {
    	$entityManager = $this->getDoctrine()->getManager();
    	$sponsor = $entityManager->getRepository(Sponsor::class)->findAll();

        return $this->render('main/sponsor.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }
}

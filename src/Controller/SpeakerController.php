<?php

namespace App\Controller;

use App\Entity\Speaker;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SpeakerController extends Controller
{
    /**
     * @Route("/speaker", name="speaker")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
    	$speaker = $entityManager->getRepository(Speaker::class)->findAll();


        return $this->render('main/speaker.html.twig', [
            'speaker' => $speaker,
        ]);
    }
}

<?php

namespace App\Controller;


use App\Entity\Event;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/", name="main")
     */
    public function index($id = 1)
    {
        
    	$entityManager = $this->getDoctrine()->getManager();
    	$event = $entityManager->getRepository(Event::class)->find($id);


        return $this->render('main/index.html.twig', [
        	'event' => $event,
        ]);
    }
}

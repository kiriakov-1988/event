<?php

namespace App\Controller;

use App\Entity\Ticket;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TicketController extends Controller
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function index()
    {
        
    	$entityManager = $this->getDoctrine()->getManager();
    	$ticket = $entityManager->getRepository(Ticket::class)->findAll();


        return $this->render('main/ticket.html.twig', [
            'ticket' => $ticket,
        ]);
    }
}

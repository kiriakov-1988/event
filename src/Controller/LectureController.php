<?php

namespace App\Controller;

use App\Entity\Day;
use App\Entity\Lecture;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LectureController extends Controller
{
    /**
     * @Route("/lecture", name="lecture")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $day = $entityManager->getRepository(Day::class)->findAll();


        $days = [];

        foreach ($day as $value) {
        	 $days[] = $value->getDate()->format('d.m.Y');
        }


    	$lecture = $entityManager->getRepository(Lecture::class)->findAllOrderByDayTime();

        return $this->render('main/lecture.html.twig', [
            'days' => $days,
            'lecture' => $lecture,
        ]);
    }
}

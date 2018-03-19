<?php

namespace App\Controller;

use App\Entity\PhotoGallery;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PhotoGalleryController extends Controller
{
	/**
     * @Route("/gallery")
     */
    public function index()
    {
        
    	$entityManager = $this->getDoctrine()->getManager();
    	$photo_gallery = $entityManager->getRepository(PhotoGallery::class)->findAll();

        return $this->render('main/photo_gallery.html.twig', [
            'photo_gallery' => $photo_gallery,
        ]);
    }
}

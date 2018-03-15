<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LectureRepository")
 */
class Lecture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;


    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\Day",
     *     inversedBy="days"
     * )
     */ 
	private $day;

	/**
     * @ORM\Column(type="time")
     */    
    private $time;

    /**
     * @ORM\Column(type="string")
     */
    private $duration;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\Room",
     *     inversedBy="rooms"
     * )
     */ 
    private $room;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\Speaker",
     *     inversedBy="speakers"
     * )
     */ 
    private $speaker;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\LectureType",
     *     inversedBy="lectures"
     * )
     */  
    private $type;
}

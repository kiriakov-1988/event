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


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website): void
    {
        $this->website = $website;
    }


    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day): void
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param mixed $room
     */
    public function setRoom($room): void
    {
        $this->room = $room;
    }


    /**
     * @return mixed
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }

    /**
     * @param mixed $speaker
     */
    public function setSpeaker($speaker): void
    {
        $this->speaker = $speaker;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }



    public function __toString()
    {
        return $this->getName();
    }
}

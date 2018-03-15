<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DayRepository")
 */
class Day
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\Lecture",
     *     mappedBy="day"
     * )
     */
    private $days;

    //////////////////////////

    public function __construct()
    {
        $this->days = new ArrayCollection();
    }
}

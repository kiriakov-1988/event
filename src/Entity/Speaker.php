<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeakerRepository")
 */
class Speaker
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
    private $full_name;

    /**
     * @ORM\Column(type="string")
     */
    private $company;

    /**
     * @ORM\Column(type="string")
     */
    private $position;

    /**
     * @ORM\Column(type="string")
     */
    private $photo;

    /**
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\Lecture",
     *     mappedBy="speaker"
     * )
     */
    private $speakers;

    //////////////////////////

    public function __construct()
    {
        $this->speakers = new ArrayCollection();
    }
}

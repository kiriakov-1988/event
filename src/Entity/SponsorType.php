<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SponsorTypeRepository")
 */
class SponsorType
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
     * @ORM\OneToMany(
     *     targetEntity="App\Entity\Sponsor",
     *     mappedBy="type"
     * )
     */
    private $sponsors;

    //////////////////////////

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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


    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
    }

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
    public function getSponsors()
    {
        return $this->sponsors;
    }

    /**
     * @param mixed $sponsor
     */
    public function addSponsors(Sponsor $sponsor): void
    {
        $sponsor->setType($this);
        $this->sponsors[] = $sponsor;
    }


    public function __toString()
    {
        return $this->getName();
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SponsorRepository")
 */
class Sponsor
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
     * @ORM\Column(type="string")
     */
    private $website;

    /**
     * @ORM\Column(type="string")
     */
    private $logo;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\SponsorType",
     *     inversedBy="sponsors"
     * )
     */    
    private $type;
}

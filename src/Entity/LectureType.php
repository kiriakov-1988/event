<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LectureTypeRepository")
 */
class LectureType
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
     *     targetEntity="App\Entity\Lecture",
     *     mappedBy="type"
     * )
     */
    private $lectures;

    //////////////////////////

    public function __construct()
    {
        $this->lectures = new ArrayCollection();
    }
}

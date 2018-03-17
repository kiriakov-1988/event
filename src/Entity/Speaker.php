<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeakerRepository")
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="photo_images", fileNameProperty="photo")
     * @var File
     */
    private $photoFile;

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
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @param mixed $full_name
     */
    public function setFullName($full_name): void
    {
        $this->full_name = $full_name;
    }


    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }


    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }


    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    public function setPhotoFile(File $photo = null)
    {
        $this->photoFile = $photo;
    }


    public function getPhotoFile()
    {
        return $this->photoFile;
    }


    /**
     * @return mixed
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * @param mixed $speaker
     */
    public function addSpeakers($speaker): void
    {
        $this->speakers = $speaker;
    }

    public function __toString()
    {
        return $this->getFullName();
    }
}

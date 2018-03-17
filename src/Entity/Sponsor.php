<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SponsorRepository")
 * @Vich\Uploadable
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
     * @Vich\UploadableField(mapping="logo_images", fileNameProperty="logo")
     * @var File
     */
    private $logoFile;
       

    /**
     * @ORM\ManyToOne(
     *     targetEntity="App\Entity\SponsorType",
     *     inversedBy="sponsors"
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
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
    }

    public function setLogoFile(File $logo = null)
    {
        $this->logoFile = $logo;
    }


    public function getLogoFile()
    {
        return $this->logoFile;
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

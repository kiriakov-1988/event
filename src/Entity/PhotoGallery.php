<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhotoGalleryRepository")
 * @Vich\Uploadable
 */
class PhotoGallery
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
    private $image;

    /**
     * @Vich\UploadableField(mapping="gallery_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
    }


    public function getImageFile()
    {
        return $this->imageFile;
    }
}

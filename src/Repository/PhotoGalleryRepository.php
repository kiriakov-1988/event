<?php

namespace App\Repository;

use App\Entity\PhotoGallery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotoGallery|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoGallery|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoGallery[]    findAll()
 * @method PhotoGallery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoGalleryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotoGallery::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

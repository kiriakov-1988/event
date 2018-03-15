<?php

namespace App\Repository;

use App\Entity\LectureType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LectureType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LectureType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LectureType[]    findAll()
 * @method LectureType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LectureTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LectureType::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('l')
            ->where('l.something = :value')->setParameter('value', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

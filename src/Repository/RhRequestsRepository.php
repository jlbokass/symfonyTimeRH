<?php

namespace App\Repository;

use App\Entity\RhRequests;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RhRequests|null find($id, $lockMode = null, $lockVersion = null)
 * @method RhRequests|null findOneBy(array $criteria, array $orderBy = null)
 * @method RhRequests[]    findAll()
 * @method RhRequests[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhRequestsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RhRequests::class);
    }

    // /**
    //  * @return RhRequests[] Returns an array of RhRequests objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RhRequests
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

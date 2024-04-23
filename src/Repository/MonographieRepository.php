<?php

namespace App\Repository;

use App\Entity\Monographie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Monographie>
 *
 * @method Monographie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Monographie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Monographie[]    findAll()
 * @method Monographie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonographieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Monographie::class);
    }

    //    /**
    //     * @return Monographie[] Returns an array of Monographie objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Monographie
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

<?php

namespace App\Repository;

use App\Entity\Celestine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Celestine>
 *
 * @method Celestine|null find($id, $lockMode = null, $lockVersion = null)
 * @method Celestine|null findOneBy(array $criteria, array $orderBy = null)
 * @method Celestine[]    findAll()
 * @method Celestine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CelestineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Celestine::class);
    }

    //    /**
    //     * @return Celestine[] Returns an array of Celestine objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Celestine
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

<?php

namespace App\Repository;

use App\Entity\PatrimoineDisparus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PatrimoineDisparus>
 *
 * @method PatrimoineDisparus|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatrimoineDisparus|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatrimoineDisparus[]    findAll()
 * @method PatrimoineDisparus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatrimoineDisparusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatrimoineDisparus::class);
    }

    //    /**
    //     * @return PatrimoineDisparus[] Returns an array of PatrimoineDisparus objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?PatrimoineDisparus
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

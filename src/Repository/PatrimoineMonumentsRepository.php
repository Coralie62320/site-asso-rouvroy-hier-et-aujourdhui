<?php

namespace App\Repository;

use App\Entity\PatrimoineMonuments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PatrimoineMonuments>
 *
 * @method PatrimoineMonuments|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatrimoineMonuments|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatrimoineMonuments[]    findAll()
 * @method PatrimoineMonuments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatrimoineMonumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatrimoineMonuments::class);
    }

    //    /**
    //     * @return PatrimoineMonuments[] Returns an array of PatrimoineMonuments objects
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

    //    public function findOneBySomeField($value): ?PatrimoineMonuments
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

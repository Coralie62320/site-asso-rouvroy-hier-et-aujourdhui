<?php

namespace App\Repository;

use App\Entity\PatrimoineReligieux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PatrimoineReligieux>
 *
 * @method PatrimoineReligieux|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatrimoineReligieux|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatrimoineReligieux[]    findAll()
 * @method PatrimoineReligieux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatrimoineReligieuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatrimoineReligieux::class);
    }

    //    /**
    //     * @return PatrimoineReligieux[] Returns an array of PatrimoineReligieux objects
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

    //    public function findOneBySomeField($value): ?PatrimoineReligieux
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

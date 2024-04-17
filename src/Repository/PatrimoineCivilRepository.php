<?php

namespace App\Repository;

use App\Entity\PatrimoineCivil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PatrimoineCivil>
 *
 * @method PatrimoineCivil|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatrimoineCivil|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatrimoineCivil[]    findAll()
 * @method PatrimoineCivil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatrimoineCivilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatrimoineCivil::class);
    }

    //    /**
    //     * @return PatrimoineCivil[] Returns an array of PatrimoineCivil objects
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

    //    public function findOneBySomeField($value): ?PatrimoineCivil
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

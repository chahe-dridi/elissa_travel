<?php

namespace App\Repository;

use App\Entity\ReservationVoyage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationVoyage>
 *
 * @method ReservationVoyage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationVoyage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationVoyage[]    findAll()
 * @method ReservationVoyage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationVoyageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationVoyage::class);
    }

//    /**
//     * @return ReservationVoyage[] Returns an array of ReservationVoyage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReservationVoyage
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

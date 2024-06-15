<?php

namespace App\Repository;

use App\Entity\ReservationHotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationHotel>
 *
 * @method ReservationHotel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationHotel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationHotel[]    findAll()
 * @method ReservationHotel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationHotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationHotel::class);
    }

//    /**
//     * @return ReservationHotel[] Returns an array of ReservationHotel objects
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

//    public function findOneBySomeField($value): ?ReservationHotel
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

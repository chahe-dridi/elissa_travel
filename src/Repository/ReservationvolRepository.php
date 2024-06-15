<?php

namespace App\Repository;

use App\Entity\Reservationvol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservationvol>
 *
 * @method Reservationvol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationvol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationvol[]    findAll()
 * @method Reservationvol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationvolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationvol::class);
    }

//    /**
//     * @return Reservationvol[] Returns an array of Reservationvol objects
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

//    public function findOneBySomeField($value): ?Reservationvol
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\Vol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vol>
 *
 * @method Vol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vol[]    findAll()
 * @method Vol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vol::class);
    }

    public function findByDepartureAndArrivalAirport(?int $departureAirportId, ?int $arrivalAirportId): array
    {
        $qb = $this->createQueryBuilder('v');

        if ($departureAirportId) {
            $qb->andWhere('v.airport_depart = :departureAirportId')
                ->setParameter('departureAirportId', $departureAirportId);
        }

        if ($arrivalAirportId) {
            $qb->andWhere('v.airport_arrive = :arrivalAirportId')
                ->setParameter('arrivalAirportId', $arrivalAirportId);
        }

        return $qb->getQuery()->getResult();
    }


    public function findByCityCountryAndDate(?string $departureCity, ?string $departureCountry, ?string $arrivalCity, ?string $arrivalCountry, ?\DateTime $date): array
    {
        $qb = $this->createQueryBuilder('v')
            ->leftJoin('v.airport_depart', 'ad')
            ->leftJoin('v.airport_arrive', 'aa');

        if ($departureCity && $departureCountry) {
            $qb->andWhere('ad.city = :departureCity')
               ->andWhere('ad.country = :departureCountry')
               ->setParameter('departureCity', $departureCity)
               ->setParameter('departureCountry', $departureCountry);
        }

        if ($arrivalCity && $arrivalCountry) {
            $qb->andWhere('aa.city = :arrivalCity')
               ->andWhere('aa.country = :arrivalCountry')
               ->setParameter('arrivalCity', $arrivalCity)
               ->setParameter('arrivalCountry', $arrivalCountry);
        }

        if ($date) {
            $qb->andWhere(':date BETWEEN v.heure_depart AND v.heure_arrive')
               ->setParameter('date', $date);
        }

        return $qb->getQuery()->getResult();
    }

 


//    /**
//     * @return Vol[] Returns an array of Vol objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vol
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

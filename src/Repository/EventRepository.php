<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 *
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    ///////////////////////////////////////////////////////////////////////


    public function getEventStatsByType(): array
    {
        // Implémentez ici la logique pour récupérer les statistiques d'événements par type d'événement
        // Vous pouvez utiliser des requêtes DQL ou des requêtes QueryBuilder pour cela
        // Par exemple :
        $qb = $this->createQueryBuilder('e')
            ->select('te.nomType, COUNT(e.id) as count')
            ->join('e.TypeEvenement', 'te')
            ->groupBy('te.nomType');

        return $qb->getQuery()->getResult();
    }


    ////////////////////////////////////////////////////////////////////////////////////

    /*public function calculateTotalPriceSold(Event $event): int
    {
        // Récupérer le nombre de tickets vendus
        $ticketsSold = $event->getNbrticketsdispo();

        // Récupérer le prix unitaire
        $price = $event->getPrixentre();

        // Calculer le montant total
        $totalPrice = $ticketsSold * $price;

        return $totalPrice;
    }*/

   
    public function getEventsWithTotalAmount(): array
    {
        return $this->createQueryBuilder('e')
            ->select('e.NomEvent, SUM(e.nbrticketsdispo * e.prixentre) AS totalAmount')
            ->leftJoin('e.reservationEvents', 'r')
            ->groupBy('e.id')
            ->getQuery()
            ->getResult();
    }
    

//    /**
//     * @return Event[] Returns an array of Event objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Event
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

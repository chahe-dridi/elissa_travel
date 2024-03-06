<?php

namespace App\Repository;

use App\Entity\Volclass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Volclass>
 *
 * @method Volclass|null find($id, $lockMode = null, $lockVersion = null)
 * @method Volclass|null findOneBy(array $criteria, array $orderBy = null)
 * @method Volclass[]    findAll()
 * @method Volclass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VolclassRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Volclass::class);
    }

//    /**
//     * @return Volclass[] Returns an array of Volclass objects
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

//    public function findOneBySomeField($value): ?Volclass
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

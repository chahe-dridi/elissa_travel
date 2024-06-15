<?php

namespace App\Repository;

use App\Entity\PdfGenerator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PdfGenerator>
 *
 * @method PdfGenerator|null find($id, $lockMode = null, $lockVersion = null)
 * @method PdfGenerator|null findOneBy(array $criteria, array $orderBy = null)
 * @method PdfGenerator[]    findAll()
 * @method PdfGenerator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PdfGeneratorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PdfGenerator::class);
    }

//    /**
//     * @return PdfGenerator[] Returns an array of PdfGenerator objects
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

//    public function findOneBySomeField($value): ?PdfGenerator
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

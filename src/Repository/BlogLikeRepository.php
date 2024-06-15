<?php

namespace App\Repository;

use App\Entity\Blog;
use App\Entity\BlogLike;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @extends ServiceEntityRepository<BlogLike>
 *
 * @method BlogLike|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogLike|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogLike[]    findAll()
 * @method BlogLike[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogLikeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogLike::class);
    }
    public function countByBlogAndUser(Blog $blog, UserInterface $user)
    {

        $qb= $this->createQueryBuilder('b')
            ->select('COUNT(b)')
            ->where('b.blog = :blog')
            ->andWhere('b.user = :user')
            ->setParameter('blog',$blog)
            ->setParameter('user',$user)
            ;
        return $qb->getQuery()->getSingleScalarResult();
    }
    public function countBlog(Blog $blog)
    {

        $qb= $this->createQueryBuilder('b')
            ->select('COUNT(b)')
            ->where('b.blog = :blog')
            ->setParameter('blog',$blog)

        ;
        return $qb->getQuery()->getSingleScalarResult();
    }
}

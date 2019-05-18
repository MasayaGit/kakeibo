<?php

namespace App\Repository;

use App\Entity\Cost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cost|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cost|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cost[]    findAll()
 * @method Cost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cost::class);
    }

    public function findByCategory($person,$value)
    {
        $builder = $this->createQueryBuilder('c');
        return $builder
            ->where($builder->expr()->eq('c.person', '?1'))
            ->andWhere($builder->expr()->eq('c.category', '?2'))
            ->setParameters(array(1 => $person, 2 => $value))
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Cost[] Returns an array of Cost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cost
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    //最近の投稿から順に並べられるようにする。
    public function findAll()
    {
        return $this->findBy(array(), array('posted' => 'DESC'));
    }
}

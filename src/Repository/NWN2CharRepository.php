<?php

namespace App\Repository;

use App\Entity\NWN2Char;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NWN2Char|null find($id, $lockMode = null, $lockVersion = null)
 * @method NWN2Char|null findOneBy(array $criteria, array $orderBy = null)
 * @method NWN2Char[]    findAll()
 * @method NWN2Char[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NWN2CharRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NWN2Char::class);
    }

    // /**
    //  * @return NWN2Char[] Returns an array of NWN2Char objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NWN2Char
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

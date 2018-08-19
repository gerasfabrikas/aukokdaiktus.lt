<?php

namespace App\Repository;

use App\Entity\Need;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Need|null find($id, $lockMode = null, $lockVersion = null)
 * @method Need|null findOneBy(array $criteria, array $orderBy = null)
 * @method Need[]    findAll()
 * @method Need[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NeedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Need::class);
    }

    public function getCountOfFulfilledAndNotDeletedNeedsOfTypeThings(): int
    {
        return $this->count([
            'full' => 1,
            'type' => 2,
            'deletedAt' => null,
        ]);
    }

//    /**
//     * @return Need[] Returns an array of Need objects
//     */
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
    public function findOneBySomeField($value): ?Need
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

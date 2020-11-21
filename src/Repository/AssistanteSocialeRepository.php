<?php

namespace App\Repository;

use App\Entity\AssistanteSociale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AssistanteSociale|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssistanteSociale|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssistanteSociale[]    findAll()
 * @method AssistanteSociale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssistanteSocialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssistanteSociale::class);
    }

    // /**
    //  * @return AssistanteSociale[] Returns an array of AssistanteSociale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AssistanteSociale
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

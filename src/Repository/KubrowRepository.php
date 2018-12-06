<?php

namespace App\Repository;

use App\Entity\Kubrow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Kubrow|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kubrow|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kubrow[]    findAll()
 * @method Kubrow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KubrowRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Kubrow::class);
    }

    /**
     * @return Kubrow[] Returns an array of Kubrow objects
     */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
}

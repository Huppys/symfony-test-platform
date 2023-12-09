<?php

namespace App\Repository;

use App\Entity\ConsentLoggerLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConsentLoggerLog>
 *
 * @method ConsentLoggerLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsentLoggerLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsentLoggerLog[]    findAll()
 * @method ConsentLoggerLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsentLoggerLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsentLoggerLog::class);
    }

//    /**
//     * @return ConsentLoggerLog[] Returns an array of ConsentLoggerLog objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ConsentLoggerLog
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

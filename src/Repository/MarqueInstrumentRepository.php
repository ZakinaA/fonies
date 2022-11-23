<?php

namespace App\Repository;

use App\Entity\MarqueInstrument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MarqueInstrument>
 *
 * @method MarqueInstrument|null find($id, $lockMode = null, $lockVersion = null)
 * @method MarqueInstrument|null findOneBy(array $criteria, array $orderBy = null)
 * @method MarqueInstrument[]    findAll()
 * @method MarqueInstrument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarqueInstrumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MarqueInstrument::class);
    }

    public function save(MarqueInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MarqueInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MarqueInstrument[] Returns an array of MarqueInstrument objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MarqueInstrument
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

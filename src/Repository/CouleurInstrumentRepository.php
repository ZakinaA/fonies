<?php

namespace App\Repository;

use App\Entity\CouleurInstrument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CouleurInstrument>
 *
 * @method CouleurInstrument|null find($id, $lockMode = null, $lockVersion = null)
 * @method CouleurInstrument|null findOneBy(array $criteria, array $orderBy = null)
 * @method CouleurInstrument[]    findAll()
 * @method CouleurInstrument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouleurInstrumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CouleurInstrument::class);
    }

    public function save(CouleurInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CouleurInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CouleurInstrument[] Returns an array of CouleurInstrument objects
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

//    public function findOneBySomeField($value): ?CouleurInstrument
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

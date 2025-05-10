<?php

namespace App\Repository;

use App\Entity\Provenances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Provenances>
 *
 * @method Provenances|null find($id, $lockMode = null, $lockVersion = null)
 * @method Provenances|null findOneBy(array $criteria, array $orderBy = null)
 * @method Provenances[]    findAll()
 * @method Provenances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvenancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Provenances::class);
    }

    public function save(Provenances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Provenances $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function lastInsert() :?Provenances
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.id = :val')
        ->setParameter('val', $this->getEntityManager()->getConnection()->lastInsertId())
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }

    public function findByDocument(int $id) 
    {
        return $this->getEntityManager()->createQuery("SELECT p
        FROM   App\Entity\Provenances p, App\Entity\Documents d
        where d.id = p.Document and d.id= :id and d.status = true order by p.id desc ")
        ->setParameter('id',$id)
        ->getResult()
        ;
    }

//    /**
//     * @return Provenances[] Returns an array of Provenances objects
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

//    public function findOneBySomeField($value): ?Provenances
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

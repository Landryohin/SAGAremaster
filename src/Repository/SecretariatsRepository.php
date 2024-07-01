<?php

namespace App\Repository;

use App\Entity\Secretariats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Secretariats>
 *
 * @method Secretariats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Secretariats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Secretariats[]    findAll()
 * @method Secretariats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SecretariatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Secretariats::class);
    }

    public function save(Secretariats $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Secretariats $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Secretariats[] Returns an array of Secretariats objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Secretariats
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function findOneBySecretaire(string $value): ?Secretariats
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Secretaire = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id','desc')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findOneByDirection( $direction, string $type): ?Secretariats
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Direction = :dir and s.Type = :type')
            ->setParameter('dir', $direction)
            ->setParameter('type', $type)
            ->orderBy('s.id','desc')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findSecretaireByType(string $type):?Secretariats
    {
         $req = "SELECT sec
         FROM  App\Entity\Secretariats sec
         where sec.Type = :typ order by sec.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->setParameter('typ', $type)
         ->getOneOrNullResult()
         ;
    }

    public function findBySupAdministratif(string $sup)
    {
         $req = "SELECT ser
         FROM  App\Entity\Secretariats sec, App\Entity\Services ser,  App\Entity\Divisions d
         where d.Service = ser.id and d.status = true and ser.status = true and sec.Type = d.Code and sec.Type = 'ADMINISTRATIF' and ser.Code = :sup order by sec.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->setParameter('sup', $sup)
         ->setMaxResults(1)
         ->getResult()
         ;
    }
}

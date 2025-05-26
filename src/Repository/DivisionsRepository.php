<?php

namespace App\Repository;

use App\Entity\Divisions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Divisions>
 *
 * @method Divisions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Divisions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Divisions[]    findAll()
 * @method Divisions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DivisionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Divisions::class);
    }

    public function save(Divisions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Divisions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByCode($value): ?Divisions
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.Code = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getUsersId($Code)
    {
        $ids = $this->getEntityManager()->createQuery('SELECT u.id
            FROM  App\Entity\Divisions d , App\Entity\Users u
            where d.Code = u.zone and  d.Code = :Code ')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
        $retour = [];
        foreach($ids as $key => $val) $retour[] = $val['id'];
        return $retour;
    }

    public function getDivisions()
    {
        return $this->getEntityManager()->createQuery('SELECT d
            FROM App\Entity\Divisions d 
            where d.Code not in (Select s.Code from App\Entity\Services s)
            order by d.Code asc')
            ->getResult()
        ;
    }

    public function getDivisionsFonctionnelles()
    {
        return $this->getEntityManager()->createQuery('SELECT d
            FROM App\Entity\Divisions d 
            where d.Code  not in (Select s.Code from App\Entity\Services s) and d.status = true
            order by d.Code asc')
            ->getResult()
        ;
    }

    /**
    * @return int[] l'identifiants dans utilisateurs
    */

    public function getUsers($Code)
    {
        return $this->getEntityManager()->createQuery('SELECT u
            FROM  App\Entity\Users u  
            where u.zone =  :Code ')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
    }
    
    /**
    * @return Divisions[] Returns an array of Direction objects
    */
   public function findBySearch($key): array
   {
       return $this->createQueryBuilder('d')
       ->Where(" upper(d.Code) like upper(:key) or upper(d.Libelle) like upper(:key) ")
       ->orderBy('d.Code', 'ASC')
           //->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    /**
//     * @return Divisions[] Returns an array of Divisions objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Divisions
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

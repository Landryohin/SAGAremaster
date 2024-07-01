<?php

namespace App\Repository;

use App\Entity\TypeDocuments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeDocuments>
 *
 * @method TypeDocuments|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDocuments|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDocuments[]    findAll()
 * @method TypeDocuments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDocumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDocuments::class);
    }

    public function save(TypeDocuments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TypeDocuments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    
   /**
    * @return TypeDocuments[] Returns an array of TypeDocuments objects
    */
   public function findAllOrderByLibelle(): array
   {
       return $this->createQueryBuilder('t')
           ->orderBy('t.Libelle', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

   /**
    * @return TypeDocuments[] Returns an array of TypeDocuments objects
    */
    public function findAllOrderByPoste($poste): array
    {
        $query = 'SELECT t  FROM  App\Entity\Affectations a , App\Entity\Documents d, App\Entity\TypeDocuments t
            where  d.id = a.Document and t.id = d.TypeDocument and d.status = true 
            and (a.Receveur in (:poste) or a.Envoyeur in (:poste) or d.Poste in (:poste))';
        return $this->getEntityManager()->createQuery($query)->setParameter("poste",$poste)->getResult();
    }

   /**
    * @return TypeDocuments[] Returns an array of Direction objects
    */
    public function findBySearch($key): array
    {
        return $this->createQueryBuilder('t')
        ->Where(" upper(t.Code) like upper('%$key%') or upper(t.Libelle) like upper('%$key%') ")
        ->orderBy('t.Code', 'ASC')
        ->getQuery()
        ->getResult()
        ;
    }

    /**
    * @return int[] Returns an array of Direction objects
    */
    public function findIdByDirection(int $id): array
    {
        $query = 'SELECT t.id  FROM App\Entity\Directions d, App\Entity\TypeDocuments t
            where  d.id = t.Direction and d.id = :id and d.status = true and t.status = true';
        return $this->getEntityManager()->createQuery($query)
        ->setParameter("id",$id)->getResult();
    }

    /**
    * @return TypeDocuments[] Returns an array of Direction objects
    */
    public function findByDirection(int $id): array
    {
        $query = 'SELECT t  FROM App\Entity\TypeDocuments t
            where  (t.id in (:idD) or t.id in (:idP)) and t.status = true';
        return $this->getEntityManager()->createQuery($query)
            ->setParameter("idD",$this->findIdByDirection($id))
            ->setParameter("idP",$this->findIdByPublic())
            ->getResult();
    }


    /**
    * @return TypeDocuments[] Returns an array of Direction objects
    */
    public function findByPublic(): array
    {
        return $this->createQueryBuilder('t')
        ->Where("t.Direction = null and t.status = true")
        ->orderBy('t.Code', 'ASC')
        ->getQuery()
        ->getResult()
        ;
    }

    /**
    * @return int[] Returns an array of Direction objects
    */
    public function findIdByPublic(): array
    {
        return $this->getEntityManager()->createQueryBuilder()
        ->select('t.id')->from('App\Entity\TypeDocuments','t')
        ->Where("t.Direction is null and t.status = true")
        ->orderBy('t.Code', 'ASC')
        ->getQuery()
        ->getResult()
        ;
    }

    /**
    * @return TypeDocuments[] Returns an array of Direction objects
    */
    public function findByStatus(): array
    {
        return $this->createQueryBuilder('t')
        ->Where("t.status = true ")
        ->orderBy('t.Code', 'ASC')
        ->getQuery()
        ->getResult()
        ;
    }


//    /**
//     * @return TypeDocuments[] Returns an array of TypeDocuments objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeDocuments
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

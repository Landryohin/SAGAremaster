<?php

namespace App\Repository;

use App\Entity\Directions;
use App\Entity\Divisions;
use App\Entity\Services;
use Doctrine\DBAL\Connection;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Migrations\Version\Direction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Direction>
 *
 * @method Directions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Directions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Directions[]    findAll()
 * @method Directions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DirectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Directions::class);
    }

    public function save(Directions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Directions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByCode($value): ?Directions
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.Code = :val and d.status = true')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function myDirection($value): ?Directions
    {
        if($this->isDirection($value))
        return $this->createQueryBuilder('d')
            ->andWhere('d.Code = :val and d.status = true')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
        if($this->isService($value))
        return  $this->getEntityManager()->createQuery('SELECT d
        FROM  App\Entity\Services s ,  App\Entity\Directions d   
        where s.Direction = d.id and s.Code = :Code and s.status = true')
            ->setParameter('Code', $value)
            ->getOneOrNullResult()
        ;
        if($this->isDivision($value))
        return  $this->getEntityManager()->createQuery('SELECT d
        FROM  App\Entity\Services s ,  App\Entity\Directions d,  App\Entity\Divisions di   
        where s.Direction = d.id and di.Service = s.id and di.status = true and di.Code = :Code and s.status = true')
            ->setParameter('Code', $value)
            ->getOneOrNullResult()
        ;
    }

    public function isDirection($value): ?Directions
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.Code = :val and d.status = true')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function isService($value): ?Services
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select('s')->from('App\Entity\Services','s')
            ->andWhere('s.Code = :val and s.status = true')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function isDivision($value): ?Divisions
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select('di')->from('App\Entity\Divisions','di')
            ->andWhere('di.Code = :val and di.status = true')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }


    public function findOneByID($value): ?Directions
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
    * @return string[] l'identifiants dans utilisateurs
    */
    public function getServiceCode($Code)
    {
        $code =  $this->getEntityManager()->createQuery('SELECT s.Code 
        FROM  App\Entity\Services s ,  App\Entity\Directions d   
        where s.Direction = d.id and d.Code = :Code and s.status = true')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
        $retour = [];
        foreach($code as $key => $val) $retour[] = $val['Code'];
        return $retour;
    }

    public function getServices($Code)
    {
        return $this->getEntityManager()->createQuery('SELECT s
            FROM  App\Entity\Services s ,  App\Entity\Directions d 
            where d.id = s.Direction and d.Code = :Code and s.Code <> :Code and  s.status = true')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
    }

    public function getDivisions($Code)
    {
        return $this->getEntityManager()->createQuery('SELECT di
            FROM App\Entity\Divisions di , App\Entity\Directions d , App\Entity\Services s 
            where s.id = di.Service  and s.status = true and di.status = true and d.id = s.Direction and di.Code not in(:divs) and d.Code = :Code')
            ->setParameter('Code', $Code)
            ->setParameter('divs', $this->getServiceCode($Code))
            ->getResult()
        ;
    }

    public function findBySecretaire(string $secretaire = null)
    {
         $req = "SELECT d
         FROM  App\Entity\Secretariats s, App\Entity\Directions d
         where d.id = s.Direction and d.status = true ";
         if($secretaire) $req .=" and  s.Secretaire = '$secretaire' ";
         $req .=" order by d.id desc ";
         return $this->getEntityManager()->createQuery($req)
         ->setMaxResults(1)
         ->getResult()
         ;
    }
    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getChefServicesId($Code)
    {
        $ids =  $this->getEntityManager()->createQuery('SELECT u.id
            FROM  App\Entity\Services s ,  App\Entity\Users u,  App\Entity\Directions d
            where s.Code = u.zone and  s.Code <>:Code and s.Direction = d.id and  d.Code =:Code and d.status = true and s.status = true')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
        $retour = [];
        foreach($ids as $key => $val) $retour[] = $val['id'];
        return $retour;
    }

    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getAgentId($Code)
    {
        $ids = $this->getEntityManager()->createQuery('SELECT u.id
            FROM  App\Entity\Users u
            where u.zone =  :Code ')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
        $retour = [];
        foreach($ids as $key => $val) $retour[] = $val['id'];
        return $retour;
    }

    public function getUsers($Code)
    {
        return $this->getEntityManager()->createQuery('SELECT u
            FROM  App\Entity\Users u  
            where u.id in (:ids) ')
            ->setParameter('ids', $this->getAllUsersId($Code))
            ->getResult()
        ;
    }

    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getChefDivisionsId($Code)
    {
        $ids =  $this->getEntityManager()->createQuery('SELECT u.id
            FROM  App\Entity\Services s , App\Entity\Divisions d , App\Entity\Users u  
            where d.Code = u.zone and d.status = true and s.status = true and s.id = d.Service and s.Code in (:Code)' )
            ->setParameter('Code',$this->getServiceCode($Code))
            ->getResult()
        ;
        $retour = [];
        foreach($ids as $key => $val) $retour[] = $val['id'];
        return $retour;
    }

    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getAllUsersId($Code)
    {
        $userIds = [];
        $chefDivisions = $this->getChefDivisionsId($Code);
        $chefServices = $this->getChefServicesId($Code);
        $agent = $this->getAgentId($Code);
        $userIds = $agent;
        foreach($chefDivisions as $key => $val) $userIds[] = $val;
        foreach($chefServices as $key => $val) $userIds[] = $val;
        return $userIds;
    }
    
    /**
    * @return string[] l'identifiants dans utilisateurs
    */
    public function getDivisionsCode($Code)
    {
        $codes =  $this->getEntityManager()->createQuery('SELECT di.Code
            FROM App\Entity\Divisions di , App\Entity\Directions d , App\Entity\Services s 
            where s.id = di.Service  and di.status = true and s.status = true and d.id = s.Direction and di.Code not in(:divs) and d.Code = :Code')
            ->setParameter('Code', $Code)
            ->setParameter('divs', $this->getServiceCode($Code))
            ->getResult()
        ;
        $retour = [];
        foreach($codes as $key => $val) $retour[] = $val['Code'];
        return $retour;
    }

    /**
    * @return string[] l'identifiants dans utilisateurs
    */
    public function getServicesCode($Code)
    {
        $codes = $this->getEntityManager()->createQuery('SELECT s.Code
            FROM App\Entity\Directions d , App\Entity\Services s 
            where d.id = s.Direction and s.status = true and d.Code = :Code and s.Code <> :Code')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
        $retour = [];
        foreach($codes as $key => $val) $retour[] = $val['Code'];
        return $retour;
    }

    /**
    * @return string[] l'identifiants dans utilisateurs
    */
    public function getAllCode($Code)
    {
        $Codes[] = $Code;
        foreach($this->getServiceCode($Code) as $key => $val) $Codes[] = $val;
        foreach($this->getDivisionsCode($Code) as $key => $val) $Codes[] = $val;
        return $Codes;
    }

   public function findBySearch($key)
   {
       return $this->createQueryBuilder('d')
           ->Where(" upper(d.Code) like upper(:key) or upper(d.Libelle) like upper(:key) ")
           ->orderBy('d.Code', 'ASC')
           //->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }


    /**
    * @return Direction[] Returns an array of Direction objects
    */
   public function findAllByDesc(): array
   {
       return $this->createQueryBuilder('d')
           ->andWhere('d.status = true')
           ->orderBy('d.id', 'DESC')
           ->getQuery()
           ->getResult()
       ;
   }
//      /**
//     * @return Direction[] Returns an array of Direction objects
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


//    public function findOneBySomeField($value): ?Direction
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

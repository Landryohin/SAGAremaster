<?php

namespace App\Repository;

use App\Entity\Services;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Services>
 *
 * @method Services|null find($id, $lockMode = null, $lockVersion = null)
 * @method Services|null findOneBy(array $criteria, array $orderBy = null)
 * @method Services[]    findAll()
 * @method Services[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Services::class);
    }

    public function save(Services $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Services $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOneByCode($value): ?Services
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Code = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function getServices()
    {
        return $this->getEntityManager()->createQuery('SELECT s
            FROM  App\Entity\Services s 
            where s.Code not in (SELECT d.Code from App\Entity\Directions d)
            order by s.Code asc')
            ->getResult()
        ;
    }

    public function getServicesFonctionneles()
    {
        return $this->getEntityManager()->createQuery('SELECT s
            FROM  App\Entity\Services s 
            where s.Code not in (SELECT d.Code from App\Entity\Directions d) and s.status = true
            order by s.Code asc')
            ->getResult()
        ;
    }

    public function getDivisions($Code)
    {
        return $this->getEntityManager()->createQuery('SELECT d
            FROM App\Entity\Divisions d , App\Entity\Services s 
            where s.id = d.Service and  s.Code = :Code and d.Code <> :Code and d.status = true')
            ->setParameter('Code', $Code)
            ->getResult()
        ;
    }

    /**
    * @return int[] l'identifiants dans utilisateurs
    */
    public function getAgentId($Code)
    {
        $ids = $this->getEntityManager()->createQuery('SELECT u.id
            FROM   App\Entity\Users u
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
            FROM  App\Entity\Divisions d , App\Entity\Users u  
            where d.Code = u.zone and d.Code in (:Code) and d.status = true' )
            ->setParameter('Code',$this->getDivisionsCode($Code))
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
        $agent = $this->getAgentId($Code);
        $userIds = $agent;
        foreach($chefDivisions as $key => $val) $userIds[] = $val;
        return $userIds;
    }
    
    /**
    * @return string[] l'identifiants dans utilisateurs
    */
    public function getDivisionsCode($Code)
    {
        $codes =  $this->getEntityManager()->createQuery('SELECT di.Code
            FROM App\Entity\Divisions di , App\Entity\Services s 
            where s.id = di.Service and di.Code <> :Code and s.Code = :Code and di.status = true')
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
        $Codes = [];
        $Codes [] = $Code;
        foreach($this->getDivisionsCode($Code) as $key => $val) $Codes[] = $val;
        return $Codes;
    }

    /**
    * @return Services[] Returns an array of Direction objects
    */
    public function findBySearch($key): array
    {
        return $this->createQueryBuilder('s')
        ->Where(" upper(s.Code) like upper('%$key%') or upper(s.Libelle) like upper('%$key%') ")
        ->orderBy('s.Code', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Services[] Returns an array of Services objects
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

//    public function findOneBySomeField($value): ?Services
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

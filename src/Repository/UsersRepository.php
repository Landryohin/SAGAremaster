<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<Users>
 *
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function save(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Users $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof Users) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);

        $this->add($user, true);
    }

//    /**
//     * @return Users[] Returns an array of Users objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Users
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    /**
    * @return Users[] Returns an array of Direction objects
    */
    public function findBySearch($key): array
    {
        return $this->createQueryBuilder('u')
            ->Where(" upper(u.nom) like upper('%$key%') or upper(u.prenom) like upper('%$key%')
            or upper(u.niveau) like upper('%$key%') or upper(u.email) like upper('%$key%')
            or upper(u.zone) like upper('%$key%') ")
            ->orderBy('u.nom', 'ASC')
            ->orderBy('u.prenom', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
   public function findById($id): ?Users
   {
       return $this->createQueryBuilder('u')
           ->andWhere('u.id = :val')
           ->setParameter('val', $id)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }

   public function findBySecretaire(string  $direction = null, string $user = null)
   {
        $req = "SELECT u
        FROM   App\Entity\Users u, App\Entity\Secretariats s ";
        if($direction) $req .=", App\Entity\Directions d ";
        $req .="where u.zone = s.Secretaire and u.status = true ";
        if($direction) $req .=" and s.Direction = d.id and d.Code = '$direction' and d.status = true ";
        if($user) $req .=" and u.id = $user ";
        $req .=" order by u.id desc ";
        return $this->getEntityManager()->createQuery($req)
        ->setMaxResults(1)
        ->getResult()
        ;
   }

    /**
    * @return Users[] Returns an array of Users objects
    */
   public function findAllUers()
   {
       return $this->createQueryBuilder('u')
           ->andWhere('u.id <> 0 and u.status = true')
           ->orderBy('u.nom','asc')
           ->getQuery()
           ->getResult()
       ;
   }

   public function findAllUersForPoste()
   {
        $retour = [];
        foreach($this->findAllUers() as $user) $retour [$user->getNom()." ".$user->getPrenom()] = $user;
        return $retour;
   }

   public function lastInsert() 
    {
        return $this->createQueryBuilder('u')
        ->andWhere('u.id = :val')
        ->setParameter('val', $this->getEntityManager()->getConnection()->lastInsertId())
        ->getQuery()
        ->getOneOrNullResult()
        ;
        
    }

}




<?php

namespace App\Repository;

use App\Entity\Postes;
use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Postes>
 *
 * @method Postes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Postes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Postes[]    findAll()
 * @method Postes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postes::class);
    }

    public function save(Postes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Postes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Postes[] Returns an array of Postes objects
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

//    public function findOneBySomeField($value): ?Postes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    /**
    * @return Postes[] Returns an array of Postes objects
    */
   public function findByExampleField($value): array
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.exampleField = :val')
           ->setParameter('val', $value)
           ->orderBy('p.id', 'ASC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

    /**
    * @return Postes[] Returns an array of Postes objects
    */
   public function findAllDesc(): array
   {
        $req = "SELECT p
         FROM  App\Entity\Postes p
         where p.status = true order by p.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->getResult()
         ;
   }

   public function findOneByAgent(int $id): ?Postes
   {
        $req = "SELECT p
         FROM  App\Entity\Postes p, App\Entity\Users u
         where p.Agent = u.id and u.id = :id and p.status = true order by p.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->setParameter('id', $id)
         ->getOneOrNullResult()
         ;
   }

   public function findOneByAgentAndFonction(int $id, $fonction): ?Postes
   {
        $req = "SELECT p
         FROM  App\Entity\Postes p, App\Entity\Users u
         where p.Agent = u.id and u.id = :id and p.Fonction in  (:fonc) and p.status = true and p.DateDeb <= :deb order by p.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->setParameter('id', $id)
         ->setParameter('deb', (new \DateTimeImmutable("now")))
         ->setParameter('fonc', $fonction)
         ->getOneOrNullResult()
         ;
   }

   /**
    * @return Postes[] Returns an array of Postes objects
    */
   public function findByAgent(int $id): array
   {
        $req = "SELECT p
         FROM  App\Entity\Postes p, App\Entity\Users u
         where p.Agent = u.id and u.id = :id and p.status = true and p.DateDeb <= :deb order by p.id desc";
         return $this->getEntityManager()->createQuery($req)
         ->setParameter('id', $id)
         ->setParameter('deb', (new \DateTimeImmutable("now")))
         ->getResult()
         ;
   }

   /**
    * @return Postes[] Returns an array of Postes objects
    */
    public function findByFonction(string  $value): array
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.Fonction = :val and p.status = true')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
        ;
    }

    /**
    * @return Postes[] Returns an array of Postes objects
    */
    public function findByNiveau(string  $value): array
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.Niveau = :val and p.status = true')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
        ;
    }

   public function findOneByFonction($value): ?Postes
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.Fonction = :val')
           ->setParameter('val', $value)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }

   public function findOneByFonctionAndNiveauAndType(string $niveau, $fonction,string $type): ?Postes
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.Fonction in  (:fonc) and p.Niveau = :niv and p.Type = :typ and p.status = true')
           ->setParameter('niv', $niveau)
           ->setParameter('fonc', $fonction)
           ->setParameter('typ', $type)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }

   public function findOneByFonctionAndNiveauAndAgent(Users $user): ?Postes
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.Fonction in  (:fonc) and p.Niveau = :niv and p.Agent = :id and p.status = true')
           ->setParameter('niv', $user->getNiveau())
           ->setParameter('fonc', $user->getZone())
           ->setParameter('id', $user->getId())
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }

   /**
    * @return Users[] Returns an array of Users objects
    */
   public function findAllAgentByFonction( $fonction): array
   {
        $req = "SELECT u
            FROM  App\Entity\Postes p, App\Entity\Users u
            where p.Fonction in  (:fonc) and p.Niveau = 'Agent' and p.Agent = u.id and p.status = true order by u.nom asc";
            return $this->getEntityManager()->createQuery($req)
           ->setParameter('fonc', $fonction)
           ->getResult()
       ;
   }

   /**
    * @return Users[] Returns an array of Users objects
    */
    public function findAllByNiveauAndFonction($niveau, $fonction): array
    {
         $req = "SELECT p
             FROM  App\Entity\Postes p
             where p.Fonction in  (:fonc) and p.Niveau = :niv  and p.status = true order by p.id desc";
             return $this->getEntityManager()->createQuery($req)
            ->setParameter('fonc', $fonction)
            ->setParameter('niv', $niveau)
            ->getResult()
        ;
    }
 
   public function updateFonction( string $old,  string $new)
   {
        $queryBuilderSecretaire = $this->getEntityManager()->createQueryBuilder();
        $secretariat = $queryBuilderSecretaire->update('App\Entity\Secretariats', 's')
        ->set('s.Secretaire', ':new')
        ->where('s.Secretaire = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();
        $queryBuilderFonction = $this->getEntityManager()->createQueryBuilder();
        $fonction = $queryBuilderFonction->update('App\Entity\Postes', 'p')
        ->set('p.Fonction', ':new')
        ->where('p.Fonction = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();
        $queryBuilderPoste = $this->getEntityManager()->createQueryBuilder();
        $poste = $queryBuilderPoste->update('App\Entity\Documents', 'd')
        ->set('d.Poste', ':new')
        ->where('d.Poste = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();

        $queryBuilderInitiateur = $this->getEntityManager()->createQueryBuilder();
        $initiateur = $queryBuilderInitiateur->update('App\Entity\Documents', 'd')
        ->set('d.Initiateur', ':new')
        ->where('d.Initiateur = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();

        $queryBuilderEnvoyeur = $this->getEntityManager()->createQueryBuilder();
        $envoyeur = $queryBuilderEnvoyeur->update('App\Entity\Affectations', 'a')
        ->set('a.Envoyeur', ':new')
        ->where('a.Envoyeur = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();

        $queryBuilderReceveur = $this->getEntityManager()->createQueryBuilder();
        $receveur = $queryBuilderReceveur->update('App\Entity\Affectations', 'a')
        ->set('a.Receveur', ':new')
        ->where('a.Receveur = :old')
        ->setParameter('new',$new)
        ->setParameter('old',$old)
        ->getQuery()
        ->execute();
        return $envoyeur && $receveur && $fonction && $poste && $initiateur && $secretariat;
   }
}
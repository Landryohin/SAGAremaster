<?php

namespace App\Repository;

use App\Entity\Affectations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Affectations>
 *
 * @method Affectations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affectations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affectations[]    findAll()
 * @method Affectations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffectationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affectations::class);
    }

    public function save(Affectations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Affectations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByReceveur($poste,$limit = null,string $administratif = null )
    {
        $query = 'SELECT a
        FROM  App\Entity\Affectations a ';
        if($administratif) $query.=", App\Entity\Documents d, App\Entity\Postes p where p.id = d.PosteOwner and a.Document = d.id and (p.Fonction in (:poste)  or d.Initiateur in (:poste)) and d.status = true "; 
        else $query .= 'where a.Envoyeur in (:poste) ';
        $query .= 'order by a.Date_Affectation_at desc'; 
        if($limit)
        return $this->getEntityManager()->createQuery($query)
            ->setParameter('poste', $poste)
            ->setMaxResults($limit)
            ->getResult()
        ;
        return $this->getEntityManager()->createQuery($query)
            ->setParameter('poste', $poste)
            ->getResult()
        ;
    }

    public function findAllDesc()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'desc')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findBySearchAffectationId( $type = null, $begin = null , $end = null, $key = null, $poste =null)
    {
        
        $query = 'SELECT d.id FROM  App\Entity\Affectations a , App\Entity\Documents d, App\Entity\Postes p ';
        if($type) $query.= ', App\Entity\TypeDocuments t ';  
        $query.= ' where p.id = d.PosteOwner and d.id = a.Document  and';
        if($type) $query.= ' t.id = d.TypeDocument and';
        if($poste) $query.= "  ((a.Receveur in (:poste) and a.status = :status) or a.Envoyeur in (:poste)  or p.Fonction in (:poste)  or d.Initiateur in (:poste))  and";
        if($type) $query.= " (upper(t.Code) like upper('%{$type}%') or upper(t.Libelle) like upper('%{$type}%')) and";
        if($begin && $end) $query.= " ((d.DateArrivee  between :begin and :end)  or (d.Document_at  between :begin and :end) or (a.Date_Affectation_at  between :begin and :end)) and";
        elseif($begin) $query.= " (d.DateArrivee = :begin or d.Document_at = :begin or a.Date_Affectation_at = :begin ) and";
        if($key){
            $query.= " (";
            if(is_string($key)) $query.= " upper(d.Initiateur) like upper(:key) or upper(d.Poste) like upper(:key) or upper(d.Objet) like upper(:key) or upper(d.Reference) like upper(:key) or upper(d.Structure) like upper(:key) ";
            if(is_integer($key)) $query.= " or d.NumeroEnregistrement = :key ) ";
            $query.= " ) ";
        }
        if(substr($query,-3,3) == "and" ) $query = substr($query,0 ,strlen($query) - 3);
        $entity = $this->getEntityManager()->createQuery($query);
        if(is_integer($key)) $entity->setParameter('key', $key);
        elseif($key) $entity->setParameter('key', "%$key%");
        if($begin) $entity->setParameter('begin', $begin);
        if($end) $entity->setParameter('end', $end);
        if($poste) $entity->setParameter('poste', $poste)->setParameter('status', true);
        return $entity->getResult();
    }

    public function findBySearchId( $type = null, $begin = null, $end = null, $key = null, $poste =null)
    {
        
        $query = 'SELECT d.id FROM App\Entity\Documents d, App\Entity\Postes p ';
        if($type) $query.= ', App\Entity\TypeDocuments t ';  
        if($type || $begin || $end || $key || $poste)$query.= ' where d.status = true and p.id = d.PosteOwner and ';
        if($type) $query.= ' t.id = d.TypeDocument and';
        if($poste) $query.= " (p.Fonction in (:poste) or d.Initiateur in (:poste) or d.Niveau = :niveau ) and";
        if($type) $query.= " ( upper(t.Code) like upper('%{$type}%') or upper(t.Libelle) like upper('%{$type}%')) and";
        if($begin && $end) $query.= " ((d.DateArrivee  between :begin and :end)  or (d.Document_at  between :begin and :end)) and";
        elseif($begin) $query.= " (d.DateArrivee = :begin or d.Document_at = :begin ) and";
        if($key ){
            $query.= " (";
            if(is_string($key)) $query.= " upper(d.Initiateur) like upper(:key) or upper(d.Poste) like upper(:key) or upper(d.Objet) like upper(:key) or upper(d.Reference) like upper(:key) or upper(d.Structure) like upper(:key) ";
            if(is_integer($key)) $query.= " or d.NumeroEnregistrement = :key ";
            $query.= " ) ";
        }
        if(substr($query,-3,3) == "and" ) $query = substr($query,0 ,strlen($query) - 3);
        $entity = $this->getEntityManager()->createQuery($query);
        if(is_integer($key)) $entity->setParameter('key', $key);
        elseif($key) $entity->setParameter('key', "%$key%");
        if($begin) $entity->setParameter('begin', $begin);
        if($end) $entity->setParameter('end', $end);
        if($poste) $entity->setParameter('poste', $poste)->setParameter("niveau",'PUBLIC');
        return $entity->getResult();
    }

    public function findBySearchProvenance( $type = null, $begin = null , $end = null, $key = null,$poste = null, int $limit = null)
    {
        $query = 'SELECT d from  App\Entity\Documents d, App\Entity\Provenances p where ';
        if($key){
            $query.= " ( ";
            if(is_string($key)) $query.= " ( upper(p.Structure ) like upper(:key) ";
            if(is_integer($key)) $query.= ' or p.Numero = :key ';
            $query.= " ) and ";
        }
        $query.= ' ( d.id in (:ids) or d.id in (:ida) ) and  p.Document = d.id  order by d.id desc ';
        $result =  $this->getEntityManager()->createQuery($query)
            ->setParameter(':ids', $this->findBySearchId( $type , $begin , $end, $key, $poste))
            ->setParameter(':ida', $this->findBySearchAffectationId( $type , $begin , $end, $key, $poste));
        if(is_integer($key)) $result->setParameter('key', $key);
        elseif($key) $result->setParameter('key', "%$key%");
        return $result->getResult();
    }

    public function findBySearch( $type = null, $begin = null , $end = null, $key = null, $poste = null, int $limit = null,int  $page = null, bool $statistique = false)
    {   
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count($this->findBySearch( $type , $begin , $end, $key, $poste,null,null,$statistique))/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        } 
        $query = 'SELECT a from App\Entity\Affectations a, App\Entity\Documents d where a.Document = d.id and ( d.id in (:idp) or d.id in (:ids) or d.id in (:ida) ';
        if(!$statistique) $query.= ' or d.Reponse in (:idp) or d.Reponse in (:ids) or d.Reponse in (:ida)';
        $query .= ')  order by a.Date_Affectation_at desc, a.status desc';
        $result =  $this->getEntityManager()->createQuery($query)
        ->setParameter(':idp', $this->findBySearchProvenance( $type , $begin , $end, $key, $poste))
        ->setParameter(':ids', $this->findBySearchId( $type , $begin , $end, $key, $poste))
        ->setParameter(':ida', $this->findBySearchAffectationId( $type , $begin , $end, $key, $poste));
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }

    public function findAffectactionByAgent($id)
    {
        return $this->getEntityManager()->createQuery('SELECT a
        FROM  App\Entity\Affectations a
        where a.Agent = :id and a.status = true order by a.id desc')
            ->setParameter('id', $id)
            ->getResult()
        ;
    }
    public function lastInsert(): ?Affectations
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.id = :val')
            ->setParameter('val', $this->getEntityManager()->getConnection()->lastInsertId())
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }    

//    /**
//     * @return Affectations[] Returns an array of Affectations objects
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

//    public function findOneBySomeField($value): ?Affectations
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

}

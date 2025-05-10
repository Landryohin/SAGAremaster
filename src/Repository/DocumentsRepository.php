<?php

namespace App\Repository;

use App\Entity\Documents;
use App\Entity\Postes;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Documents>
 *
 * @method Documents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Documents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Documents[]    findAll()
 * @method Documents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Documents::class);
    }

    public function save(Documents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Documents $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Documents[] Returns an array of Documents objects
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

//    public function findOneBySomeField($value): ?Documents
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
  
    /** 
    *@return Documents[] Returns an array of Documents objects
    */

    public function findByType( $type, $poste = null)
    {
        if($poste)
        return $this->getEntityManager()->createQuery("SELECT d
        FROM  App\Entity\Affectations a , App\Entity\Documents d, App\Entity\TypeDocuments t  
        where ((a.Receveur in (:poste) and a.status = :status) or a.Envoyeur in (:poste)) and d.id = a.Document and t.Code = :type and t.id = d.TypeDocument 
        order by d.id desc")
            ->setParameter('poste', $poste)
            ->setParameter('status', true)
            ->setParameter('type', $type)
            ->getResult()
        ;
        return $this->getEntityManager()->createQuery('SELECT d
        FROM  App\Entity\Documents d, App\Entity\TypeDocuments t  
        where t.Code = :type and t.id = d.TypeDocument order by d.id desc')
            ->setParameter('type', $type)
            ->getResult()
        ;
    }

    public function findBySearchPoste($poste )
    {
        $query = 'SELECT d.id from App\Entity\Documents d, App\Entity\Postes p where d.status = true and  p.id = a.PosteOwner and   (p.Fonction in (:poste)  or d.Initiateur in (:poste))';
        return $this->getEntityManager()->createQuery($query)
        ->setParameter(':poste', $poste)
        ->getResult();
    }

    public function findByByPosteAgentId(Postes $poste )
    {
        $query = "SELECT d.id from App\Entity\Documents d, App\Entity\Postes p where d.status = true and p.Niveau = :niveau
        and p.Agent = :id and p.id = d .PosteOwner and   (p.Fonction in (:poste)  or d.Initiateur in (:poste))";
        return $this->getEntityManager()->createQuery($query)
        ->setParameter(':poste', $poste->getFonction())
        ->setParameter(':id', $poste->getAgent()->getId())
        ->setParameter(':niveau', $poste->getNiveau())
        ->getResult();
    }

    public function findByByPosteAgent(Postes $poste )
    {
        $query = "SELECT d from App\Entity\Documents d, App\Entity\Postes p where d.status = true and p.Niveau = :niveau
        and p.Agent = :id and p.id = a.PosteOwner and   (p.Fonction in (:poste)  or d.Initiateur in (:poste))";
        return $this->getEntityManager()->createQuery($query)
        ->setParameter(':poste', $poste->getFonction())
        ->setParameter(':id', $poste->getAgent()->getId())
        ->setParameter(':niveau', $poste->getNiveau())
        ->getResult();
    }

    public function findBySearchAffectationId( $type = null, $begin = null , $end = null, $key = null, $poste =null)
    {
        
        $query = 'SELECT d.id FROM  App\Entity\Affectations a , App\Entity\Documents d, App\Entity\Postes p ';
        if($type) $query.= ', App\Entity\TypeDocuments t ';  
        $query.= ' where d.id = a.Document and  p.id = a.PosteOwner and d.status = true and';
        if($type) $query.= ' t.id = d.TypeDocument and';
        if($poste) $query.= "  ((a.Receveur in (:poste) and a.status = :status) or a.Envoyeur in (:poste)  or p.Fonction in (:poste) or d.Initiateur in (:poste))  and";
        if($type) $query.= " (upper(t.Code) like upper('%{$type}%') or upper(t.Libelle) like upper('%{$type}%')) and";
        if($begin && $end) $query.= "  ((d.DateArrivee  between :begin and :end)  or (d.Document_at  between :begin and :end)) and";
        elseif($begin) $query.= " (d.DateArrivee = :begin or d.Document_at = :begin) and";
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
        $query = 'SELECT d.id FROM App\Entity\Documents d,  App\Entity\Postes p ';
        if($type) $query.= ', App\Entity\TypeDocuments t ';  
        $query.= ' where  p.id = d.PosteOwner and d.status = true and';
        if($type) $query.= ' t.id = d.TypeDocument and';
        if($poste) $query.= " (p.Fonction in (:poste)  or d.Initiateur in (:poste) or d.Niveau = :niveau ) and";
        if($type) $query.= " ( upper(t.Code) like upper('%{$type}%') or upper(t.Libelle) like upper('%{$type}%')) and";
        if($begin && $end) $query.= " ((d.DateArrivee  between :begin and :end)  or (d.Document_at  between :begin and :end)) and";
        elseif($begin) $query.= " (d.DateArrivee = :begin or d.Document_at = :begin) and";
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

    public function findBySearchProvenance( $type = null, $begin = null , $end = null, $key = null,$poste = null)
    {
        $query = 'SELECT d from  App\Entity\Documents d, App\Entity\Provenances p where d.status = true and ';
        if($key){
            $query.= " ( ";
            if(is_string($key)) $query.= "  upper(p.Structure ) like upper(:key) ";
            if(is_integer($key)) $query.= ' or p.Numero = :key ';
            $query.= " ) and ";
        }
        $query.= ' ( d.id in (:ids) or d.id in (:ida) ) and  p.Document = d.id  order by d.id desc ';
        $result =  $this->getEntityManager()->createQuery($query)
            ->setParameter(':ids', $this->findBySearchId( $type , $begin , $end, $key, $poste))
            ->setParameter(':ida', $this->findBySearchAffectationId( $type , $begin , $end, $key, $poste));
        if(is_integer($key)) $result->setParameter('key', $key);
        if(is_string($key)) $result->setParameter('key', "%$key%");
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
        $query = 'SELECT d from App\Entity\Documents d where d.id in (:idp) or d.id in (:ids) or d.id in (:ida) ';
        if(!$statistique) $query.= ' or d.Reponse in (:idp) or d.Reponse in (:ids) or d.Reponse in (:ida)';
        $query.= '  order by d.Document_at desc';
        $result =  $this->getEntityManager()->createQuery($query)
        ->setParameter(':idp', $this->findBySearchProvenance( $type , $begin , $end, $key, $poste))
        ->setParameter(':ids', $this->findBySearchId( $type , $begin , $end, $key, $poste))
        ->setParameter(':ida', $this->findBySearchAffectationId( $type , $begin , $end, $key, $poste));
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }


    public function findDocumentByAffectaction($poste =null , int $limit = null,int $page = null,bool $statistique = false)
    {
        $ids = $this->findDocumentByAffectactionPosteId($poste);
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count( $this->findDocumentByAffectactionPoste($poste))/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        }
        $query = 'SELECT d from App\Entity\Documents d where d.Niveau = :niveau or d.id in (:ids) ';
        if(!$statistique) $query.= ' or d.Reponse in (:ids) ';
        $query.= '  order by d.Document_at desc';
      
        $result = $this->getEntityManager()->createQuery($query)
        ->setParameter(':ids', $ids)
        ->setParameter("niveau",'PUBLIC');
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }

    public function findDocumentByAffectactionPosteId($poste)
    {
        $query = 'SELECT d.id FROM  App\Entity\Documents d where d.status = true and 
        (d.id in (select daa.id from App\Entity\Documents daa, App\Entity\Affectations aa, App\Entity\Postes pa  where aa.PosteOwner = pa.id  and aa.Document = daa.id and pa.Fonction in (:poste) and aa.status =:status)
        or (d.id in (select da.id from App\Entity\Documents da, App\Entity\Affectations a  where  a.Document = da.id and a.Receveur in (:poste) and a.status =:status)
        or (d.id in (select do.id from App\Entity\Documents do, App\Entity\Postes p  where do.PosteOwner = p.id  and (p.Fonction in (:poste)  or do.Initiateur in (:poste))))
        ))';
        return $this->getEntityManager()->createQuery($query)
        ->setParameter('poste', $poste)
        ->setParameter('status',true)
        ->getResult();
    }
    
    public function findAffectactionByDocument($id)
    {
        return $this->getEntityManager()->createQuery('SELECT a
        FROM  App\Entity\Affectations a , App\Entity\Documents d  
        where d.id = :id and d.status = true and d.id = a.Document order by a.id desc')
            ->setParameter('id', $id)
            ->getResult()
        ;
    }

    public function findDocumentByAgent(Postes $poste , int $limit = null,int $page = null,bool $statistique = false)
    {
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count($this->findDocumentByAgent($poste))/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        }
        $query = 'SELECT d from App\Entity\Documents d where d.Niveau = :niveau or d.id in (:ids) or d.id in (:ido) ';
        if(!$statistique) $query.= ' or d.Reponse in (:ids) or d.Reponse in (:ido)';
        $query.= '  order by d.Document_at desc';
        $result = $this->getEntityManager()->createQuery($query)
        ->setParameter(':ids', $this->findDocumentByAffectactionAgentId($poste->getAgent()->getId()))
        ->setParameter(':ido', $this->findByByPosteAgentId($poste))
        ->setParameter("niveau",'PUBLIC');
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }
    
    public function findDocumentByAffectactionAgentId($id)
    {
        return $this->getEntityManager()->createQuery('SELECT d.id
        FROM  App\Entity\Affectations a , App\Entity\Documents d 
        where a.Agent = :id and d.status = true and a.status = true and d.id = a.Document order by d.id desc')
            ->setParameter('id', $id)
            ->getResult()
        ;
    }

    public function findDocumentByAffectactionAgent($id)
    {
        return $this->getEntityManager()->createQuery('SELECT d
        FROM  App\Entity\Affectations a , App\Entity\Documents d  
        where a.Agent = :id and d.status = true and a.status = true and d.id = a.Document order by d.id desc')
            ->setParameter('id', $id)
            ->getResult()
        ;
    }

    /** 
    *@return Documents[] Returns an array of Documents objects
    */
    public function findAllDesc(int $limit = null,int $page = null )
    {
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count($this->findAllDesc())/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        }
        $query = "SELECT d FROM   App\Entity\Documents d  where d.status = true order by d.id desc ";
        $result = $this->getEntityManager()->createQuery($query);
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }

    /** 
    *@return Documents[] Returns an array of Documents objects
    */
    public function findDocumentNotReponse(int $limit = null,int $page = null)
    {
        $reponseId = $this->findReponseId();
        if($reponseId == [] ) $reponseId[] = 0;
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count($this->findDocumentNotReponse())/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        }
        $query = "SELECT d FROM App\Entity\Documents d where d.status = true and d.id not in (:reponseId) order by d.id desc ";
        $result = $this->getEntityManager()->createQuery($query)
        ->setParameter('reponseId',$reponseId );
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }

    /** 
    *@return int[] Returns an array of Documents objects
    */
    public function findReponseId()
    {
        $query = "SELECT r.id FROM   App\Entity\Documents d , App\Entity\Documents r where d.status = true and r.status = true and d.Reponse = r.id " ;
        return $this->getEntityManager()->createQuery($query)->getResult();
    }

    /** 
    *@return Documents[] Returns an array of Documents objects
    */
    public function findReponseDesc(int $limit = null,int $page = null)
    {
        if($limit) $limit = abs($limit);
        if($page && $limit){
            $countPage = count($this->findReponseDesc())/$limit;
            if(is_double($countPage)) $countPage = intval($countPage) +1;
            if($page > $countPage) $page = $countPage;
            if($page < 1) $page = 1;
        }
        $query = "SELECT r FROM   App\Entity\Documents d , App\Entity\Documents r where d.status = true and r.status = true and d.Reponse = r.id  order by r.id desc " ;
        $result = $this->getEntityManager()->createQuery($query);
        if($limit) $result->setMaxResults($limit);
        if($limit && $page && $page!= 1)$result->setFirstResult(intval( ($page * $limit) -$limit));      
        return $result->getResult();
    }

    
    public function findOneReponse(int $id):?Documents
    {
        $query = "SELECT r FROM   App\Entity\Documents d , App\Entity\Documents r where d.status = true and r.status = true and d.Reponse = r.id and d.Reponse = :id order by r.id desc " ;
        return $this->getEntityManager()->createQuery($query)->setParameter('id',$id)->getOneOrNullResult();
    }


    public function findById(int $id):?Documents
    {
        return $this->createQueryBuilder('d')
            ->where('d.id = :id')
            ->setParameter(":id", $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
        
    }

    public function lastInsert(): ?Documents
    {
        return $this->createQueryBuilder('d')
        ->andWhere('d.id = :val')
        ->setParameter('val', $this->getEntityManager()->getConnection()->lastInsertId())
        ->getQuery()
        ->getOneOrNullResult()
    ;
        
    }
    public function verifyReference(string $ref): ?Documents
    {
        return $this->createQueryBuilder('d')
        ->andWhere('d.Reference = :val')
        ->setParameter('val', $ref)
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult()
    ; 
    }
    public function SansReferenceNumber():?int
    {
        $query = "SELECT d.Reference FROM App\Entity\Documents d WHERE d.Reference LIKE 'SR %'";
        $references = $this->getEntityManager()->createQuery($query)->getResult();
        $maxValue = null;
        foreach ($references as $reference) {
            $value = (int) substr($reference['Reference'], 3); // Convertir en entier en utilisant (int)
            if ($value > $maxValue || $maxValue === null) {
                $maxValue = $value;
            }
        }
        return $maxValue;
    }
}

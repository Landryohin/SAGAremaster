<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DocumentsRepository;
use App\Repository\DirectionsRepository;
use App\Controller\SecretariatsController;
use App\Repository\PostesRepository;
use App\Repository\SecretariatsRepository;
use App\Repository\TypeDocumentsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StatistiquesController extends AbstractController
{
    #[Route('/statistiques', name: 'app_statistiques_index')]
    public function index(DocumentsRepository $documentsRepository,PostesRepository $postesRepository, SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository,ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository, TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        if(isset($_GET['page'])) $page = $_GET['page'];
        else $page = null;
        if(isset($_GET['limit'])) $limit = $_GET['limit'];
        else $limit = null;
        $countPage = null;
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $posteUser = $postesRepository->findOneByFonctionAndNiveauAndAgent($user);
        $assistant = $secretaire = $particulier = $administratif = false;
        $secretaire = $secretariatsController->verify($postesRepository ,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") $assistant = true;
            elseif($secretaire == "ADMINISTRATIF") $administratif = true;
            elseif($secretaire == "PARTICULIER") $particulier = true;
            if($secretaire  && $secretaire != "ASSISTANT")  $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
        }
        $statistiques = [];
        $poste = [$user->getZone()];
        if($secretaire  && $secretaire != "ASSISTANT") $poste [] = $direction->getCode();
        if(($user->getNiveau() == "Directeur" && $user->getZone() == "DGML") ||  $particulier )
            $poste = ["DGML","DAGML",$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]; 
        if ($assistant || $administratif) $poste = [$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire()];
        if(isset($_REQUEST['submit'])){
            $type = $begin = $end = $key = null ;
            if(isset($_POST['type']) && $_POST['type'] != "ALL") $type = $_POST['type'];
            if(isset($_POST['begin']) && !empty($_POST['begin'])) $begin = $_POST['begin'];
            if(isset($_POST['end']) && !empty($_POST['end'])) $end = $_POST['end'];
            if(isset($_POST['key']) && !empty($_POST['key'])) $key = $_POST['key'];
            if($user->getNiveau() == "Admin" ){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,null,null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,null,$limit,$page);
            }  
            elseif(($user->getNiveau() == "Directeur"  && $user->getZone() == "DGML") ||  $particulier )
            {
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$poste,null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,$poste,$limit,$page);
            }
            elseif ($assistant || $administratif){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),null,null));
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,$poste,$limit,$page);
            } 
            elseif ($secretaire && $direction){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($direction->getCode()),null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,[$user->getZone(),$direction->getCode()],$limit,$page);
            } 
            elseif($user->getNiveau() == "Directeur"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($user->getZone()),null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Service"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$servicesRepository->getAllCode($user->getZone()),null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,$servicesRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Division" || $user->getNiveau() == "DGA"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$user->getZone(),null,null))/$limit;
                $statistiques = $documentsRepository->findBySearch($type,$begin,$end,$key,$user->getZone(),$limit,$page);
            } 
        }else{
            if($user->getNiveau() == "Admin" ){
                if($limit)$countPage =  count($documentsRepository->findAllD())/$limit;
                $statistiques =  $documentsRepository->findAllDesc($limit,$page);
            }
            elseif(($user->getNiveau() == "Directeur"  && $user->getZone() == "DGML") || $particulier ) {
                $poste = ["DGML","DAGML",$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]; 
                if($limit)$countPage = count($statistiques = $documentsRepository->findDocumentByAffectaction($poste,null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction($poste,$limit,$page);
            }
            elseif ($assistant || $administratif){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$limit,$page);
            } 
            elseif ($secretaire && $direction) {
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($direction->getCode()),null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction([$user->getZone(),$direction->getCode()],$limit,$page);
            }elseif($user->getNiveau() == "Directeur"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($user->getZone()),null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Service"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($servicesRepository->getAllCode($user->getZone()),null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction($servicesRepository->getAllCode($user->getZone()),$limit,$page);
            }
            elseif($user->getNiveau() == "Division" || $user->getNiveau() == "DGA"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($user->getZone(),null,null))/$limit;
                $statistiques = $documentsRepository->findDocumentByAffectaction($user->getZone(),$limit,$page);
            }
            else{
                if($limit)$countPage = count($documentsRepository->findDocumentByAgent($posteUser))/$limit;
                $statistiques = $documentsRepository->findDocumentByAgent($posteUser,$limit,$page);
            }
        }
        if ($assistant || $administratif) $poste = ["DGML",$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire()];

        if(is_double($countPage)) $countPage = intval($countPage)+1;
        return $this->render('statistiques/index.html.twig', [
            'documents' => $statistiques,
            'poste' => $poste,
            'user' => $user,
        ]);
    }

    #[Route('/statistiques/DGR', name: 'app_statistiques_DGR')]
    public function indexDGR(): Response
    {
        return $this->render('statistiques/index_DGR.html.twig', [
            'controller_name' => 'StatistiquesController',
        ]);
    }

    #[Route('/statistiques/DCGA', name: 'app_statistiques_DGCA')]
    public function indexDGCA(): Response
    {
        return $this->render('statistiques/index_DGCA.html.twig', [
            'controller_name' => 'StatistiquesController',
        ]);
    }

    #[Route('/statistiques/DM', name: 'app_statistiques_DM')]
    public function indexDM(): Response
    {
        return $this->render('statistiques/index_DM.html.twig', [
            'controller_name' => 'StatistiquesController',
        ]);
    }

    #[Route('/statistiques/DPIB', name: 'app_statistiques_DPIB')]
    public function indexDPIB(): Response
    {
        return $this->render('statistiques/index_DPIB.html.twig', [
            'controller_name' => 'StatistiquesController',
        ]);
    }
    
}

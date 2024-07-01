<?php

namespace App\Controller;

use App\Entity\Documents;
use App\Entity\Provenances;
use App\Form\DocumentsType;
use App\Repository\UsersRepository;
use App\Repository\PostesRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DocumentsRepository;
use App\Repository\DirectionsRepository;
use App\Repository\ProvenancesRepository;
use App\Controller\SecretariatsController;
use App\Repository\SecretariatsRepository;
use App\Repository\TypeDocumentsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/documents')]
class DocumentsController extends AbstractController
{
    public  $type = [];
    #[Route('/', name: 'app_documents_index', methods: ['GET','POST'])]
    public function index(DocumentsRepository $documentsRepository,PostesRepository $postesRepository, SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository,ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        foreach($documentsRepository->findAll() as $document){
            
            $dir = $this->getParameter('documents_dir');
            $path_dir = $dir."/".date_format($document->getDocumentAt(),"Y/m/d");
            $tableChemin = explode("/",$document->getChemin());
            if(count($tableChemin) == 2) {
                $document->setChemin($tableChemin[1]);
                $documentsRepository->save($document,true);
            }
            if($document->getTypeDocument()){
                $path = $path_dir."/".$document->getChemin();
                $src = $dir."/".$document->getTypeDocument()->getCode()."/".$document->getChemin();
                if(!file_exists($path) && file_exists($src)){
                    if(!is_dir($path_dir)) mkdir($path_dir,0777,true);
                    copy($src,$path);
                }else{
                    if(file_exists($src)) unlink($src);
                }
            }
            if(!$document->getPosteOwner()){
                $document->setPosteOwner($document->getOwner()->getPostes()[0]);
                $documentsRepository->save($document,true);
            }
            $reponse = $document->getReponse();
            if($reponse && $document->getMouvement() != "DEPART" && $reponse->getMouvement() == "DEPART"){
                $reponse->setReponse($document);
                $document->setReponse(null);
                $documentsRepository->save($reponse,true);
                $documentsRepository->save($document,true);

            }
        }
        if(isset($_GET['page'])) $page = $_GET['page'];
        else $page = null;
        if(isset($_GET['limit'])) $limit = $_GET['limit'];
        else $limit = null;
        $countPage = null;
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $posteUser = $postesRepository->findOneByFonctionAndNiveauAndAgent($user);
        $assistant = $secretaire = $particulier = $administratif = $supAdministratif = $speciale =   false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") $assistant = true;
            elseif($secretaire == "ADMINISTRATIF") $administratif = true;
            elseif($secretaire == "PARTICULIER") $particulier = true;
            if($secretaire  && $secretaire != "ASSISTANT")  $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
            if( $administratif || $particulier) $speciale = true;
        }
        $serviceSupAdministratif = $secretariatsRepository->findBySupAdministratif($user->getZone());
        //dd($serviceSupAdministratif);
        //dd($secretaire);
        if($serviceSupAdministratif && $serviceSupAdministratif != [] && $serviceSupAdministratif->getChef() == $user) $supAdministratif = true;
        $documents = [];
        $poste = [];
        if(isset($_REQUEST['submit'])){
            $type = $begin = $end = $key = null ;
            if(isset($_POST['type']) && $_POST['type'] != "ALL") $type = $_POST['type'];
            if(isset($_POST['begin']) && !empty($_POST['begin'])) $begin = $_POST['begin'];
            if(isset($_POST['end']) && !empty($_POST['end'])) $end = $_POST['end'];
            if(isset($_POST['key']) && !empty($_POST['key'])) $key = $_POST['key'];
            if($user->getNiveau() == "Admin" )
            {
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,null,$limit,$page);
            }  
            elseif(($user->getNiveau() == "Directeur"&& $user->getZone() == "DGML") ||  $particulier )
            {
                $poste = ["DGML","DAGML",$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]; 
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$poste))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,$poste,$limit,$page);
            }
            elseif ($assistant || $administratif){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire()));
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$limit,$page);
            } 
            elseif ($secretaire && $direction){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($direction->getCode())))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,[$user->getZone(),$direction->getCode()],$limit,$page);
            } 
            elseif($user->getNiveau() == "Directeur"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($user->getZone())))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,$directionsRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Service"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$servicesRepository->getAllCode($user->getZone())))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,$servicesRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Division" || $user->getNiveau() == "DGA"){
                if($limit)$countPage = count($documentsRepository->findBySearch($type,$begin,$end,$key,$user->getZone()))/$limit;
                $documents = $documentsRepository->findBySearch($type,$begin,$end,$key,$user->getZone(),$limit,$page);
            } 
        }else{
            if($user->getNiveau() == "Admin" ){
                if($limit)$countPage =  count($documentsRepository->findAll())/$limit;
                $documents =  $documentsRepository->findAllDesc($limit,$page);
            }
            elseif(($user->getNiveau() == "Directeur"  && $user->getZone() == "DGML") || $particulier ) {
                $poste = ["DGML","DAGML",$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]; 
                if($limit)$countPage = count($documents = $documentsRepository->findDocumentByAffectaction($poste))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction($poste,$limit,$page);
            }
            elseif ($assistant || $administratif){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire()))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),$limit,$page);
            } 
            elseif ($secretaire && $direction) {
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($direction->getCode())))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction([$user->getZone(),$direction->getCode()],$limit,$page);
            }elseif($user->getNiveau() == "Directeur"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($user->getZone())))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Service"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($servicesRepository->getAllCode($user->getZone())))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction($servicesRepository->getAllCode($user->getZone()),$limit,$page);
            } 
            elseif($user->getNiveau() == "Division" || $user->getNiveau() == "DGA"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAffectaction($user->getZone()))/$limit;
                $documents = $documentsRepository->findDocumentByAffectaction($user->getZone(),$limit,$page);
            } 
            elseif($user->getNiveau() == "Agent"){
                if($limit)$countPage = count($documentsRepository->findDocumentByAgent($posteUser))/$limit;
                $documents = $documentsRepository->findDocumentByAgent($posteUser,$limit,$page);
            } 
        }
        if(is_double($countPage)) $countPage = intval($countPage)+1;
        //dd($documents);
        return $this->render('documents/index.html.twig', [
            'documents' => $documents,
            'user' => $user,
            'secretaire' => $secretaire,
            'speciale' => $speciale,
            'assistant' => $assistant,
            'pageCount' =>$countPage,
            'currentPage' => $page,
            'supAdministratif' => $supAdministratif,
        ]);
    }

    #[Route('/new', name: 'app_documents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PostesRepository $postesRepository,DocumentsRepository $documentsRepository,TypeDocumentsRepository $typeDocumentsRepository, SecretariatsRepository $secretariatsRepository, SecretariatsController $secretariatsController,DivisionsRepository $divisionsRepository, UsersRepository $userRepository, SluggerInterface $slugger, ProvenancesRepository $provenancesRepository, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository): Response
    {
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $posteUser = $postesRepository->findOneByFonctionAndNiveauAndAgent($user);
        $assistant = $secretaire  = $particulier = $administratif = $speciale =   false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") $assistant = true;
            elseif($secretaire == "ADMINISTRATIF") $administratif = true;
            elseif($secretaire == "PARTICULIER") $particulier = true;
            //if($secretaire  && $secretaire != "ASSISTANT")  $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
            if( $administratif || $particulier) $speciale = true;
        }
        if($assistant) return $this->redirectToRoute('app_documents_index' , [] , Response::HTTP_SEE_OTHER);
        $document = new Documents();
        $notificationReference = $Reponse = null;
        $document->setPosteOwner($posteUser);
        $document->setPoste($user->getZone());
        if($user->getZone()=="SP") $document->setNiveau("CONFIDENTIEL");
        else  $document->setNiveau("RESTREINT");
        if(isset($_GET['mouv'])) {
            if($_GET['mouv']== "REPONSE"){
                $Reponse = $documentsRepository->findById($_GET['id']);
                $document->setMouvement("DEPART");
                $document->setTypeDocument($Reponse->getTypeDocument());
                $document->setReponse($Reponse);
            } else if( $_GET['mouv']) $document->setMouvement($_GET['mouv']);
        }elseif(isset($_REQUEST['submitmouv'], $_POST['mouv'])) $document->setMouvement($_POST['mouv']);
        else $document->setMouvement("ARRIVEE DIRECTE");
        $mouvement = $document->getMouvement();
        $this->type = $typeDocumentsRepository->findByStatus();
        if($document->getMouvement()=='INTERNE'){
            $direction = $directionsRepository->myDirection($user->getZone());
            if($direction) $this->type = $typeDocumentsRepository->findByDirection($direction->getId());
            else $this->type = $typeDocumentsRepository->findByPublic();
        }
        $form = $this->createForm(DocumentsType::class, $document,['upload' => true,'types' =>$this->type]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $brochureFile = $form->get('Chemin')->getData();
            $sensibility = $form->get('Sensibility')->getData();
            if($sensibility) $document->setNiveau("PUBLIC");
            if($documentsRepository->verifyReference($document->getReference())) $notificationReference = "La référence ".$document->getReference()." existe déjà";
            elseif($document->getReference()=="SR" && $document->getMouvement()=="DEPART") $notificationReference = "La référence doit être différent de SR pour un document de départ ou de réponse";
            else {
                if(strtoupper(trim($document->getReference())) == "SR"){
                    $reference = $documentsRepository->SansReferenceNumber();
                    if($reference)$document->setReference("SR ".$reference+1);
                    else $document->setReference("SR 1");
                }
            }
            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename =  $slugger->slug($originalFilename).'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('documents_dir')."/".date_format($document->getDocumentAt(),"Y/m/d")."/",
                        $newFilename
                    );
                    $document->setChemin($newFilename);
                    $documentsRepository->save($document, true);
                    $document = $documentsRepository->lastInsert();
                    if($document->getMouvement() == "ARRIVEE PAR SGM")
                    {
                        $SGM = new Provenances();
                        $SGM->setStructure('SGM');
                        $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                        $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                        $SGM->setDocument($document);
                        $provenancesRepository->save($SGM,true);
                        $SGM = $provenancesRepository->lastInsert();
                        $document->addProvenance($SGM);
                    }
                    elseif ($document->getMouvement() == "ARRIVEE PAR CAB")
                    {
                        $SGM = new Provenances();
                        $SGM->setStructure('SGM');
                        $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                        $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                        $SGM->setDocument($document);
                        $provenancesRepository->save($SGM,true);
                        $SGM = $provenancesRepository->lastInsert();
                        $document->addProvenance($SGM);
                        $CAB = new Provenances();
                        $CAB->setStructure('CAB');
                        $CAB->setDateEnregistrement($form->get('DateEnregistrementCAB')->getData());
                        $CAB->setNumero($form->get('NumeroEnregistrementCAB')->getData());
                        $CAB->setDocument($document);
                        $provenancesRepository->save($CAB,true);
                        $CAB = $provenancesRepository->lastInsert();
                        $document->addProvenance($CAB);
                    }
                    elseif ($document->getMouvement() == "ARRIVEE PAR AUTRE")
                    {
                        $SGM = new Provenances();
                        $SGM->setStructure('SGM');
                        $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                        $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                        $SGM->setDocument($document);
                        $provenancesRepository->save($SGM,true);
                        $SGM = $provenancesRepository->lastInsert();
                        $document->addProvenance($SGM);
                        $CAB = new Provenances();
                        $CAB->setStructure('CAB');
                        $CAB->setDateEnregistrement($form->get('DateEnregistrementCAB')->getData());
                        $CAB->setNumero($form->get('NumeroEnregistrementCAB')->getData());
                        $CAB->setDocument($document);
                        $provenancesRepository->save($CAB,true);
                        $CAB = $provenancesRepository->lastInsert();
                        $document->addProvenance($CAB);
                        $AUTRE = new Provenances();
                        $AUTRE->setStructure($form->get('AUTRE')->getData());
                        $AUTRE->setDateEnregistrement($form->get('DateEnregistrementAUTRE')->getData());
                        $AUTRE->setNumero($form->get('NumeroEnregistrementAUTRE')->getData());
                        $AUTRE->setDocument($document);
                        $provenancesRepository->save($AUTRE,true);
                        $AUTRE = $provenancesRepository->lastInsert();
                        $document->addProvenance($AUTRE);
                    }
                    elseif ($document->getMouvement() == "INTERNE")
                    {
                        
                    }
                    elseif ($document->getMouvement() == "DEPART"){
                        
                    }
                    return $this->redirectToRoute('app_documents_index' ,[] , Response::HTTP_SEE_OTHER);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
            }
        }
        return $this->render('documents/new.html.twig', [
            'document' => $document,
            'secretaire'=>$secretaire,
            'form' => $form,
            'user' => $userRepository->findById($this->getUser()->getUserIdentifier()),
            'mouvement' => $mouvement,
            'speciale' => $speciale,
            'Reponse' => $Reponse,
            'notification' => $notificationReference,
        ]);
    }

    #[Route('/{id}', name: 'app_documents_show', methods: ['GET'])]
    public function show(Documents $document, ProvenancesRepository $provenancesRepository, DocumentsRepository $documentsRepository): Response
    {
        return $this->render('documents/show.html.twig', [
            'document' => $document,
            'provenances' => $provenancesRepository->findByDocument($document->getId()),
            //'affectations' => $documentsRepository->findAffectactionByDocument($document->getId()),
            'affectations' => $document->getAffectations(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_documents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Documents $document, PostesRepository $postesRepository,  DocumentsRepository $documentsRepository, TypeDocumentsRepository $typeDocumentsRepository, UsersRepository $userRepository, SluggerInterface $slugger, ProvenancesRepository $provenancesRepository,SecretariatsController $secretariatsController, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository, SecretariatsRepository $secretariatsRepository): Response
    { 
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $assistant = $secretaire  = $particulier = $administratif = $speciale =   false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") $assistant = true;
            elseif($secretaire == "ADMINISTRATIF") $administratif = true;
            elseif($secretaire == "PARTICULIER") $particulier = true;
            //if($secretaire  && $secretaire != "ASSISTANT")  $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
            if( $administratif || $particulier) $speciale = true;
        }
        if($assistant) return $this->redirectToRoute('app_documents_index' , [] , Response::HTTP_SEE_OTHER);
        $Reponse = $document->getReponse();
        if(isset($_REQUEST['submitmouv'], $_POST['mouv']))  $document->setMouvement($_POST['mouv']);
        elseif(isset($_GET['mouv']))  $document->setMouvement($_GET['mouv']); 
        $mouvement = $document->getMouvement();
        $this->type = $typeDocumentsRepository->findByStatus();
        if($document->getMouvement()=='INTERNE'){
            $direction = $directionsRepository->myDirection($user->getZone());
            if($direction) $typeDocumentsRepository->findByDirection($direction->getId());
            else $this->type = $typeDocumentsRepository->findByPublic();
        }
        $old = $document;
        $notificationReference = null;
        $SGM = new Provenances();
        $CAB = new Provenances();
        $AUTRE = new Provenances();
        foreach($old->getProvenances() as $provenance){
            if($provenance->getStructure()=="SGM") $SGM = $provenance;
            elseif($provenance->getStructure()=="CAB") $CAB = $provenance;
            elseif($provenance->getStructure()) $AUTRE = $provenance;
        }
        $form = $this->createForm(DocumentsType::class, $document,['upload' => false,'types' =>$this->type]);
        $form->handleRequest($request);
        $sensibility = false;
        if($document->getNiveau() == "PUBLIC") $sensibility = true;
        if ($form->isSubmitted() && $form->isValid()) {
            $sensibility = $form->get('Sensibility')->getData();
            if($sensibility) $document->setNiveau("PUBLIC");
            else if($user->getZone()=="SP" && $document->getPoste() == $user->getZone()) $document->setNiveau("CONFIDENTIEL");
            else if($document->getPoste() == $user->getZone()) $document->setNiveau("RESTREINT");
            $verify = $documentsRepository->verifyReference($document->getReference());
            if($verify && $verify->getId() != $document->getId()) $notificationReference = "La référence ".$document->getReference()." existe déjà";
            elseif($document->getReference()=="SR" && $document->getMouvement()=="DEPART") $notificationReference = "La référence doit être différent de SR pour un document de départ ou de réponse";
            else {
                if(strtoupper(trim($document->getReference())) == "SR"){
                    $reference = $documentsRepository->SansReferenceNumber();
                    if($reference)$document->setReference("SR ".$reference+1);
                    else $document->setReference("SR 1");
                }
            }
            $brochureFile = $form->get('Chemin')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $slugger->slug($originalFilename).'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('documents_dir')."/".date_format($document->getDocumentAt(),"Y/m/d")."/",
                        $newFilename
                    );
                    $document->setChemin($newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
            }
            if($document->getMouvement() == "ARRIVEE PAR SGM") 
            {
                $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                $provenancesRepository->save($SGM,true);
            }
            elseif ($document->getMouvement() == "ARRIVEE PAR CAB")
            {
                
                $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                $provenancesRepository->save($SGM,true);
                $CAB->setDateEnregistrement($form->get('DateEnregistrementCAB')->getData());
                $CAB->setNumero($form->get('NumeroEnregistrementCAB')->getData());
                $provenancesRepository->save($CAB,true);
            }
            elseif ($document->getMouvement() == "ARRIVEE PAR AUTRE")
            {
                $SGM->setDateEnregistrement($form->get('DateEnregistrementSGM')->getData());
                $SGM->setNumero($form->get('NumeroEnregistrementSGM')->getData());
                $provenancesRepository->save($SGM,true);
                $CAB->setDateEnregistrement($form->get('DateEnregistrementCAB')->getData());
                $CAB->setNumero($form->get('NumeroEnregistrementCAB')->getData());
                $provenancesRepository->save($CAB,true);
                $AUTRE->setDateEnregistrement($form->get('DateEnregistrementAUTRE')->getData());
                $AUTRE->setNumero($form->get('NumeroEnregistrementAUTRE')->getData());
                $provenancesRepository->save($AUTRE,true);
            }
            elseif ($document->getMouvement() == "INTERNE")
            {
                
            }
            elseif ($document->getMouvement() == "DEPART"){
                
            }
            $documentsRepository->save($document, true);                    
            return $this->redirectToRoute('app_documents_index' , [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('documents/edit.html.twig', [
            'document' => $document,
            'form' => $form,
            'speciale' => $speciale,
            'user' => $user,
            'mouvement' => $mouvement,
            'SGM' => $SGM,
            'CAB' => $CAB,
            'AUTRE' => $AUTRE,
            'sensibility' => $sensibility,
            'Reponse' => $Reponse,
            'notification' => $notificationReference,
        ]);
    }

    #[Route('/{id}', name: 'app_documents_play', methods: ['POST','GET'])]
    public function play(Request $request, Documents $document, DocumentsRepository $documentsRepository): Response
    {
        if ($this->isCsrfTokenValid('play'.$document->getId(), $request->request->get('_token'))) {
            $document->setStatus(true);
            $documentsRepository->save($document, true);
        }
        return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_documents_stop', methods: ['POST','GET'])]
    public function stop(Request $request, Documents $document, DocumentsRepository $documentsRepository): Response
    {
        $document->setStatus(false);
        $documentsRepository->save($document, true);
        return $this->redirectToRoute('app_documents_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/delete', name: 'app_documents_delete', methods: ['POST','GET'])]
    public function delete(Request $request, Documents $document, DocumentsRepository $documentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->request->get('_token'))) {
            $document->setStatus(false);
            $documentsRepository->save($document, true);
        }

        return $this->redirectToRoute('app_documents_index' ,[] , Response::HTTP_SEE_OTHER);
    }

}
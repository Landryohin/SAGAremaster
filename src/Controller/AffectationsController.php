<?php

namespace App\Controller;

use App\Entity\Postes;
use DateTimeImmutable;
use App\Entity\Directions;
use App\Entity\Affectations;
use App\Form\AffectationsType;
use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DocumentsRepository;
use App\Repository\DirectionsRepository;
use App\Repository\AffectationsRepository;
use App\Repository\PostesRepository;
use App\Repository\SecretariatsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/Affectations')]
class AffectationsController extends AbstractController
{
    #[Route('/', name: 'app_Affectations_index', methods: ['GET','POST'])]
    public function index(AffectationsRepository $AffectationsRepository,PostesRepository $postesRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository,SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        /*foreach($AffectationsRepository->findAll() as $affectation){
            if(!$affectation->getPosteOwner()){
                $affectation->setPosteOwner($affectation->getOwner()->getPostes()[0]);
                $AffectationsRepository->save($affectation,true);
            }
            if($affectation->getAgent() && !$affectation->getReceveur()){
                $affectation->setReceveur($affectation->getAgent()->getPostes()[count($affectation->getAgent()->getPostes())-1]->getFonction());
                $AffectationsRepository->save($affectation,true);
            }
        }
        foreach($AffectationsRepository->findAll() as $Affectation){
            if(!$Affectation->getOwner()){
                $owner = null;
                $direction = $directionsRepository->findOneByCode($Affectation->getEnvoyeur());
                if($direction) 
                {
                    $owner = $direction->getDirecteur();
                    if($Affectation->getEnvoyeur()==$DG)
                        $owner = $Affectation->getDocument()->getOwner();
                    else {
                        $secretariat = $secretariatsRepository->findOneByDirection($direction, "ADMINISTRATIF");
                        if($secretariat){
                            $division = $divisionsRepository->findOneByCode($secretariat->getSecretaire());
                            $owner = $division->getChef();
                        } 
                    }
                }
                else{
                    $service = $servicesRepository->findOneByCode($Affectation->getEnvoyeur());
                    if($service)    $owner = $service->getChef();
                    else{
                        $division = $divisionsRepository->findOneByCode($Affectation->getEnvoyeur());
                        $owner = $division->getChef();
                    }
                }
                $Affectation->setOwner($owner);
                $AffectationsRepository->save($Affectation,true);
            }
        }*/
        $DG = $this->getParameter('dg');
        $DGA = $this->getParameter('dga');
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $secretaire = $assistant = $particulier = $administratif = $direction =  false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") $assistant = true;
            if($secretaire == "ADMINISTRATIF") $administratif = true;
            if($secretaire == "PARTICULIER") $particulier = true;
            $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
        } 
        $Affectations = [];
        $end = date("Y-m-d");
        $begin = date("Y-m-d", strtotime('-1 month'));
        if(isset($_REQUEST['submit'])|| $begin ){
            $type = $key = null;
            //if(isset($_POST['type']) && $_POST['type'] != "ALL") $type = $_POST['type'];
            if(isset($_POST['begin']) && !empty($_POST['begin'])) $begin = $_POST['begin'];
            if(isset($_POST['end']) && !empty($_POST['end'])) $end = $_POST['end'];
            if(isset($_POST['key']) && !empty($_POST['key'])) $key = $_POST['key'];
            if($user->getNiveau() == "Admin" ) $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key);
            if(($user->getNiveau() == "Directeur"  && $user->getZone() == $DG) || $particulier) 
                $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key,[$DG,$DGA,$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]);
            elseif ($assistant || $administratif) $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key,$secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire());
            elseif ($secretaire && $direction) $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key,[$user->getZone(),$direction->getCode()]);
            elseif ($secretaire) $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key,$user->getZone());
            else $Affectations = $AffectationsRepository->findBySearch($type,$begin,$end,$key,$user->getZone());
        }else{
            //dd($secretaire);
            //dd($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire());
            //dd($Affectations = $AffectationsRepository->findAllDesc());
            if($user->getNiveau() == "Admin")  $Affectations = $AffectationsRepository->findAllDesc();
            elseif(($user->getNiveau() == "Directeur"  && $user->getZone() == $DG) || $particulier) 
                $Affectations = $AffectationsRepository->findByReceveur([$DG,$secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()]);
            elseif ($assistant || $administratif) $Affectations = $AffectationsRepository->findByReceveur($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(),null,true);
            elseif ($secretaire && $direction) $Affectations = $AffectationsRepository->findByReceveur([$user->getZone(),$direction->getCode()]);
            elseif ($secretaire) $Affectations = $AffectationsRepository->findByReceveur($user->getZone());
            elseif($user->getNiveau() != "Agent") $Affectations = $AffectationsRepository->findByReceveur($user->getZone());
            else $Affectations = $AffectationsRepository->findAffectactionByAgent($user->getId());
        }
        //dd( $Affectations[1]);
        return  $this->render('Affectations/index.html.twig', [
            'Affectations' => $Affectations,
            'user' => $user,
            'direction' => $direction,
            'begin' =>$begin,
            'end' => $end,
        ]);
    
    }

    #[Route('/new/{doc}', name: 'app_Affectations_new', methods: ['GET', 'POST'])]
    public function new(Request $request,int $doc,PostesRepository $postesRepository,SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository, AffectationsRepository $AffectationsRepository,DocumentsRepository $documentsRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository, DivisionsRepository $divisionsRepository, ServicesRepository $servicesRepository): Response
    {
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $posteUser = $postesRepository->findOneByFonctionAndNiveauAndAgent($user);
        $secretaire = $speciale = $particulier = $administratif = $direction =  false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT")  return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
            if($secretaire == "ADMINISTRATIF") $administratif = true;
            if($secretaire == "PARTICULIER") $particulier = true;
            if($administratif || $particulier ) $speciale = true;
            $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
        }         
        $Affectation = new Affectations();
        $Affectation->setPosteOwner($posteUser);
        if($speciale) $Affectation->setEnvoyeur($this->getParameter('dg'));
        elseif($secretaire) $Affectation->setEnvoyeur($direction->getCode());
        else $Affectation->setEnvoyeur($user->getZone());
        $document = $documentsRepository->findById($doc);
        $Affectation->setDocument($document);
        $form = $this->createForm(AffectationsType::class, $Affectation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $destinataire = $form->get('Receveur')->getData();
            if(is_string($destinataire)){
                $Affectation->setReceveur( $destinataire);
                $Affectation->setAgent(null);
            }
            else{
                $Affectation->setReceveur($destinataire->getFonction());
                $Affectation->setAgent($destinataire->getAgent());
            }
            $AffectationsRepository->save($Affectation, true);
            $Affectation = $AffectationsRepository->lastInsert();
            $document->addAffectation($Affectation);

            return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Affectations/new.html.twig', [
            'affectation' => $Affectation,
            'form' => $form,
            'documents_dir' => $this->getParameter('documents_dir')."/",
        ]);
    }

    #[Route('/{id}', name: 'app_Affectations_show', methods: ['GET'])]
    public function show(Affectations $Affectation): Response
    {
        //dd($this->getParameter('documents_dir')."/".date_format($Affectation->getDocument()->getDocumentAt(),"Y/m/d")."/".$Affectation->getDocument()->getChemin());
        return $this->render('Affectations/show.html.twig', [
            'Affectation' => $Affectation,
            'documents_dir' => $this->getParameter('documents_dir')."/".date_format($Affectation->getDocument()->getDocumentAt(),"Y/m/d")."/".$Affectation->getDocument()->getChemin(),
        ]);
    }

    #[Route('/{id}/valid', name: 'app_Affectations_valid', methods: ['GET'])]
    public function valid(Affectations $Affectation, AffectationsRepository $affectationsRepository): Response
    {
        $Affectation->setStatus(true);
        $Affectation->setDateAffectationAt(new DateTimeImmutable("now",null));
        $affectationsRepository->save($Affectation,true);
        return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{id}/edit', name: 'app_Affectations_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request,PostesRepository $postesRepository, SecretariatsController $secretariatsController,SecretariatsRepository $secretariatsRepository, Affectations $Affectation, AffectationsRepository $AffectationsRepository,DocumentsRepository $documentsRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository, DivisionsRepository $divisionsRepository, ServicesRepository $servicesRepository): Response
    {
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $secretaire = $speciale = $particulier = $administratif =  false;
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT")  return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
            if($secretaire == "ADMINISTRATIF") $administratif = true;
            if($secretaire == "PARTICULIER") $particulier = true;
            if($administratif || $particulier ) $speciale = true;
        } 
        $form = $this->createForm(AffectationsType::class, $Affectation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $destinataire = $form->get('Receveur')->getData();
            if(is_string($destinataire)){
                $Affectation->setReceveur( $destinataire);
                $Affectation->setAgent(null);
            }
            else{
                $Affectation->setReceveur($destinataire->getFonction());
                $Affectation->setAgent($destinataire->getAgent());
            }
            $AffectationsRepository->save($Affectation, true);

            return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
        }
        //dd($this->getParameter('documents_dir')."/".date_format($Affectation->getDocument()->getDocumentAt(),"Y/m/d")."/".$Affectation->getDocument()->getChemin());
        return $this->render('Affectations/edit.html.twig', [
            'affectation' => $Affectation,
            'form' => $form,
            'documents_dir' => $this->getParameter('documents_dir')."/".date_format($Affectation->getDocument()->getDocumentAt(),"Y/m/d")."/".$Affectation->getDocument()->getChemin()."/bbb",
        ]);
    }

    #[Route('/{id}', name: 'app_Affectations_delete', methods: ['POST'])]
    public function delete(Request $request, Affectations $Affectation, AffectationsRepository $AffectationsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Affectation->getId(), $request->request->get('_token'))) {
            $AffectationsRepository->remove($Affectation, true);
        }

        return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
    }

    public function destination(PostesRepository $postesRepository, SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository, UsersRepository $userRepository, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository){
        
        $DG = $this->getParameter('dg');
        $DGA = $this->getParameter('dga');
        $user = $userRepository->findById($this->getUser()->getUserIdentifier());
        $retour =  [];
        $secretaire = $direction = $administratif = $particulier = false; 
        $secretaire = $secretariatsController->verify($postesRepository,$user, $directionsRepository,$secretariatsRepository,$servicesRepository,$divisionsRepository); 
        if($secretaire){
            if($secretaire == "ASSISTANT") return [];
            if($secretaire == "ADMINISTRATIF") $administratif = true;
            if($secretaire == "PARTICULIER") $particulier = true;
            $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
        } 
        if($user->getNiveau() == "Directeur" || $user->getZone() == "DGAML" || $secretaire || $user->getNiveau() == "Admin" ){
            if($user->getZone() == $DG ||$user->getZone() == "DGAML" || $user->getNiveau() == "Admin" || $administratif || $particulier  ){
                $directeurs = $directionsRepository->findAllByDesc();
                if($user->getZone() != $DGA) $directeurs[] = new Directions($DGA,'Directeur Général Adjoint du Matériel et de la Logistique ');
                $retour =$this->retour("Direction", [$directeurs,$servicesRepository->getServicesFonctionneles(), $divisionsRepository->getDivisionsFonctionnelles()],$postesRepository->findByNiveau('Agent'));
            }
            elseif($secretaire && $direction) $retour = $this->retour("Direction", [$directionsRepository->getServices($direction->getCode()),$directionsRepository->getDivisions($direction->getCode())],$postesRepository->findAllByNiveauAndFonction('Agent',$directionsRepository->getAllCode($direction->getCode())));
            else $retour = $this->retour("Direction", [$directionsRepository->getServices($user->getZone()),$directionsRepository->getDivisions($user->getZone())],$postesRepository->findAllByNiveauAndFonction('Agent',$directionsRepository->getAllCode($user->getZone())));
        }elseif($user->getNiveau() == "Service") $retour = $this->retour("Service", $servicesRepository->getDivisions($user->getZone()),$postesRepository->findAllByNiveauAndFonction('Agent',$servicesRepository->getAllCode($user->getZone())));
        elseif($user->getNiveau() == "Division") $retour = $this->retour("Division", [],$postesRepository->findAllByNiveauAndFonction('Agent',$user->getZone()));
        return $retour;
    }

    public function retour(string $type, $input, $posteAgents)
    {
        $output = [];
        if($input != [])
        {
            if($type == "Direction") foreach($input as  $key => $items) foreach($items as  $key => $item) $output[$item->getLibelle()] = $item->getCode();
            elseif( $type == "Service") foreach($input as  $key => $item) $output[$item->getLibelle()] = $item->getCode();
        }
        if($posteAgents != [])foreach($posteAgents as $item) $output["Agent de ".$item->getFonction()." ".$item->getAgent()->getPrenom()." ".$item->getAgent()->getNom()] = $item;
        return $output;
    }

}

<?php

namespace App\Controller;

use App\Entity\Directions;
use App\Entity\Postes;
use App\Form\PostesType;
use App\Repository\DirectionsRepository;
use App\Repository\DivisionsRepository;
use App\Repository\PostesRepository;
use App\Repository\ServicesRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/postes')]
class PostesController extends AbstractController
{
    public array $fonctions = [];

    public function __construct(DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository)
    {
        $postes = [[new Directions('DGAML','Directeur Général Adjoint du Matériel et de la Logistique ')]];
        array_unshift($postes, $directionsRepository->findAllByDesc(), $servicesRepository->getServicesFonctionneles(), $divisionsRepository->getDivisionsFonctionnelles());
        foreach($postes as $poste ) foreach($poste as $zone )  $this->fonctions[$zone->getLibelle()] = $zone->getCode();
    }

    #[Route('/', name: 'app_postes_index', methods: ['GET','POST'])]
    public function index(PostesRepository $postesRepository,UsersRepository $usersRepository): Response
    {
        /*$poste = $postesRepository->findOneByFonctionAndNiveauAndType('Admin','DGML','PERMANENT');
        if(!$poste){
            $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
            $poste = new Postes();
            $poste->setAgent($user);
            $poste->setOwner($user);
            $poste->setNiveau("Admin");
            $poste->setFonction('DGML');
            $poste->setType("PERMANENT");
            $poste->setDateDeb(new \DateTimeImmutable("01-02-2023"));
            $postesRepository->save($poste,true);
        }*/
        foreach($postesRepository->findAll() as $poste){
            if($poste->getType()== "PERMANANT" || $poste->getNiveau()=='DGA'){
                if($poste->getNiveau()=='DGA') $poste->setFonction('DGAML');
                if($poste->getType()== "PERMANANT") $poste->setType("PERMANENT");
                $postesRepository->save($poste,true);
            }
        }
        return $this->render('postes/index.html.twig', [
            'postes' => $postesRepository->findAllDesc(),
        ]);
    }

    #[Route('/new', name: 'app_postes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PostesRepository $postesRepository, UsersRepository $usersRepository, DirectionsRepository $directionsRepository,ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $poste = new Postes();
        $form = $this->createForm(PostesType::class, $poste);
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $now = new \DateTimeImmutable("now");
           
            $oldPoste = $postesRepository->findOneByFonctionAndNiveauAndType($poste->getNiveau(),$poste->getFonction(),$poste->getType());
            if($oldPoste){
                $oldPoste->setStatus(false);
                $poste->setDateFin($now);
                $postesRepository->save($oldPoste,true);
            }
            if($poste->getDateDeb()<$now) $poste->setDateDeb($now);
            if($poste->getType() == "PERMANENT")
            {
                if($poste->getNiveau() == "Directeur"){
                    $direction = $directionsRepository->findOneByCode($poste->getFonction());
                    $direction->setDirecteur($poste->getAgent());
                    $directionsRepository->save($direction,true);
                }
                elseif($poste->getNiveau() == "Service"){
                    $Service = $servicesRepository->findOneByCode($poste->getFonction());
                    $Service->setChef($poste->getAgent());
                    $servicesRepository->save($Service,true);
                }
                else if($poste->getNiveau() == "Division"){
                    $Division = $divisionsRepository->findOneByCode($poste->getFonction());
                    $Division->setChef($poste->getAgent());
                    $divisionsRepository->save($Division,true);
                }
            }
            $poste->setOwner($user);
            $postesRepository->save($poste, true);

            return $this->redirectToRoute('app_postes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('postes/new.html.twig', [
            'poste' => $poste,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_postes_show', methods: ['GET'])]
    public function show(Postes $poste): Response
    {
        return $this->render('postes/show.html.twig', [
            'poste' => $poste,
        ]);
    }
    #[Route('/{id}/del', name: 'app_postes_del', methods: ['GET'])]
    public function valid( Postes $poste, PostesRepository $postesRepository, DirectionsRepository $directionsRepository,ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $poste->setStatus(false);
        $poste->setDateFin(new \DateTimeImmutable("now"));
        if($poste->getType() == "PERMANENT"){
            if($poste->getNiveau() == "Directeur"){
                $direction = $directionsRepository->findOneByCode($poste->getFonction());
                $direction->setDirecteur(null);
                $directionsRepository->save($direction,true);
            }
            elseif($poste->getNiveau() == "Service"){
                $Service = $servicesRepository->findOneByCode($poste->getFonction());
                $Service->setChef(null);
                $servicesRepository->save($Service,true);
            }
            else if($poste->getNiveau() == "Division"){
                $Division = $divisionsRepository->findOneByCode($poste->getFonction());
                $Division->setChef(null);
                $divisionsRepository->save($Division,true);
            }
        }
        $postesRepository->save($poste,true);
        return $this->redirectToRoute('app_Affectations_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/edit', name: 'app_postes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Postes $poste, PostesRepository $postesRepository, DirectionsRepository $directionsRepository,ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $oldPoste = $poste;
        $now = new \DateTimeImmutable("now");
        $modDateBeb = true;
        $form = $this->createForm(PostesType::class, $poste);
        if($poste->getDateDeb()<$now) $modDateBeb = false;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if($oldPoste != $poste){
                if($oldPoste->getFonction() == $poste->getFonction() && $oldPoste->getAgent() == $poste->getAgent() && $oldPoste->getNiveau() == $poste->getNiveau() && $oldPoste->getType() == $poste->getType())
                {
                    if($oldPoste->getDateFin() != $poste->getDateFin())
                        if($poste->getDateFin()<$now) $poste->setDateFin($now);
                }    
                else{
                    $oldPoste->setStatus(false);
                    $poste->setDateFin(new \DateTimeImmutable("now"));
                    $postesRepository->save($oldPoste,true);
                    if($oldPoste->getType() == "PERMANENT"){
                        if($poste->getNiveau() == "Directeur"){
                            $direction = $directionsRepository->findOneByCode($poste->getFonction());
                            $direction->setDirecteur(null);
                            $directionsRepository->save($direction,true);
                        }
                        elseif($poste->getNiveau() == "Service"){
                            $Service = $servicesRepository->findOneByCode($poste->getFonction());
                            $Service->setChef(null);
                            $servicesRepository->save($Service,true);
                        }
                        else if($poste->getNiveau() == "Division"){
                            $Division = $divisionsRepository->findOneByCode($poste->getFonction());
                            $Division->setChef(null);
                            $divisionsRepository->save($Division,true);
                        }
                    }
                    if($poste->getType() == "PERMANENT")
                    {
                        if($poste->getNiveau() == "Directeur"){
                            $direction = $directionsRepository->findOneByCode($poste->getFonction());
                            $direction->setDirecteur($poste->getAgent());
                            $directionsRepository->save($direction,true);
                        }
                        elseif($poste->getNiveau() == "Service"){
                            $Service = $servicesRepository->findOneByCode($poste->getFonction());
                            $Service->setChef($poste->getAgent());
                            $servicesRepository->save($Service,true);
                        }
                        else if($poste->getNiveau() == "Division"){
                            $Division = $divisionsRepository->findOneByCode($poste->getFonction());
                            $Division->setChef($poste->getAgent());
                            $divisionsRepository->save($Division,true);
                        }
                    }
                }
            }
            
            $postesRepository->save($poste, true);
            return $this->redirectToRoute('app_postes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('postes/edit.html.twig', [
            'poste' => $poste,
            'form' => $form,
            'mod' => $modDateBeb,
        ]);
    }

    #[Route('/{id}/play', name: 'app_postes_play', methods: ['GET'])]
    public function play(Postes $poste, PostesRepository $postesRepository): Response
    {
        $poste->setStatus(true);
        $postesRepository->save($poste, true);
        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_postes_stop', methods: ['GET'])]
    public function stop( Postes $poste, PostesRepository $postesRepository): Response
    {
        $poste->setStatus(false);
        $date = new \DateTimeImmutable('now');
        if($poste->getDateFin() > $date) $poste->setDateFin($date);
        $postesRepository->save($poste, true);
        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_postes_delete', methods: ['POST'])]
    public function delete(Request $request, Postes $poste, PostesRepository $postesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$poste->getId(), $request->request->get('_token'))) {
            $postesRepository->remove($poste, true);
        }

        return $this->redirectToRoute('app_postes_index', [], Response::HTTP_SEE_OTHER);
    }
}

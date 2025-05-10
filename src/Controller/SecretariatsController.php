<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Secretariats;
use App\Form\SecretariatsType;
use App\Repository\PostesRepository;
use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use App\Repository\SecretariatsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('admin/secretariats')]
class SecretariatsController extends AbstractController
{
    #[Route('/', name: 'app_secretariats_index', methods: ['GET'])]
    public function index(SecretariatsRepository $secretariatsRepository, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        /*foreach($secretariatsRepository->findAll() as $secretariat){
            if(!$secretariat->getOwner()|| !$secretariat->getStatus()){
                $secretariat->setStatus(true);
                $secretariat->setOwner($user);
                $secretariatsRepository->save($secretariat,true);
            }
        }*/
        return $this->render('secretariats/index.html.twig', [
            'secretariats' => $secretariatsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_secretariats_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SecretariatsRepository $secretariatsRepository, UsersRepository $usersRepository): Response
    {        
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $secretariat = new Secretariats();
        $secretariat->setOwner($user);
        $form = $this->createForm(SecretariatsType::class, $secretariat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secretariat->setSecretaire($form->get("Secretaire")->getData());
            $secretariatsRepository->save($secretariat, true);
            return $this->redirectToRoute('app_secretariats_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('secretariats/new.html.twig', [
            'secretariat' => $secretariat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_secretariats_show', methods: ['GET'])]
    public function show(Secretariats $secretariat): Response
    {
        return $this->render('secretariats/show.html.twig', [
            'secretariat' => $secretariat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_secretariats_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Secretariats $secretariat, SecretariatsRepository $secretariatsRepository): Response
    {
        $form = $this->createForm(SecretariatsType::class, $secretariat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secretariat->setSecretaire($form->get("Secretaire")->getData());
            $secretariatsRepository->save($secretariat,true);
            return $this->redirectToRoute('app_secretariats_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('secretariats/edit.html.twig', [
            'secretariat' => $secretariat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_secretariats_play', methods: ['GET'])]
    public function play( Secretariats $secretariats, SecretariatsRepository $secretariatsRepository): Response
    {
        $secretariats->setStatus(true);
        $secretariatsRepository->save($secretariats, true);
        return $this->redirectToRoute('app_secretariats_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/{id}/stop', name: 'app_secretariats_stop', methods: ['GET'])]
    public function stop( Secretariats $secretariats, SecretariatsRepository $secretariatsRepository): Response
    {
        $secretariats->setStatus(false);
        $secretariatsRepository->save($secretariats, true);
        return $this->redirectToRoute('app_secretariats_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_secretariats_delete', methods: ['POST'])]
    public function delete(Request $request, Secretariats $secretariat, SecretariatsRepository $secretariatsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$secretariat->getId(), $request->request->get('_token'))) {
            $secretariatsRepository->remove($secretariat, true);
        }

        return $this->redirectToRoute('app_secretariats_index', [], Response::HTTP_SEE_OTHER);
    }

    public function secretaires(ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository){
        $output = [];
        foreach($servicesRepository->getServices() as  $key => $item) $output[$item->getLibelle()] = $item->getCode();
        foreach($divisionsRepository->getDivisions() as  $key => $item) $output[$item->getLibelle()] = $item->getCode();
        return $output;
    }

    public function verify(PostesRepository $postesRepository, Users $user,DirectionsRepository $directionsRepository , SecretariatsRepository $secretariatsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository){
        $secretariat = $secretariatsRepository->findOneBySecretaire($user->getZone());
        if($secretariat){
            $poste = $postesRepository->findOneByAgentAndFonction ($user->getId(), $secretariat->getSecretaire());
           if($poste)   return $secretariat->getType();
        }
    }
}

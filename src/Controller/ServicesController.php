<?php

namespace App\Controller;

use App\Entity\Postes;
use App\Entity\Services;
use App\Form\ServicesType;
use App\Repository\UsersRepository;
use App\Repository\PostesRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/services')]
class ServicesController extends AbstractController
{
    #[Route('/', name: 'app_services_index', methods: ['GET','POST'])]
    public function index(ServicesRepository $servicesRepository, UsersRepository $usersRepository, PostesRepository $postesRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        /*foreach($servicesRepository->findAll() as $service){
            if(!$service->getOwner()){
                $service->setOwner($user);
                $servicesRepository->save($service,true);
            }
            if($service->getChef() && !$postesRepository->findOneByAgent($service->getChef()->getId())){
                $poste = new Postes();
                $poste->setNiveau("Service");
                $poste->setFonction($service->getCode());
                $poste->setType("PERMANENT");
                $poste->setAgent($service->getChef());
                $poste->setDateDeb(new \DateTimeImmutable("now"));
                $poste->setOwner($user);
                $postesRepository->save($poste,true);
            }
        }*/
        if(isset($_REQUEST['submit'],$_POST['key']) && !empty($_POST['key']))
        return $this->render('services/index.html.twig', [
            'services' => $servicesRepository->findBySearch($_POST['key']),
        ]);
        return $this->render('services/index.html.twig', [
            'services' => $servicesRepository->getServices(),
        ]);
    }

    #[Route('/new', name: 'app_services_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ServicesRepository $servicesRepository, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $service = new Services();
        $service->setOwner($user);
        $form = $this->createForm(ServicesType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $servicesRepository->save($service, true);

            return $this->redirectToRoute('app_services_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('services/new.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_services_show', methods: ['GET'])]
    public function show(Services $service, ServicesRepository $servicesRepository): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => $service,
            'divisions' =>$servicesRepository->getDivisions($service->getCode()),
            'users' => $servicesRepository->getUsers($service->getCode()),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_services_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Services $service, Services $OldServices, ServicesRepository $servicesRepository, PostesRepository $postesRepository): Response
    {
        $old = $service->getCode();
        $form = $this->createForm(ServicesType::class, $service);
        $form->handleRequest($request);
        if($OldServices == null) $OldServices = $service;
        if ($form->isSubmitted() && $form->isValid()) {
            $new = $service->getCode();        
            if($new != $old)  $postesRepository->updateFonction($old, $new);

            $servicesRepository->save($service, true);

            return $this->redirectToRoute('app_services_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('services/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_services_play', methods: ['GET'])]
    public function play(Services $service, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository): Response
    {
        $service->setStatus(true);
        foreach($service->getDivisions() as $division){
            $division->setStatus(true);
            $divisionsRepository->save($division,true);
        }
        $servicesRepository->save($service, true);
        return $this->redirectToRoute('app_services_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_services_stop', methods: ['GET'])]
    public function stop( Services $service, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $service->setStatus(false);
        foreach($service->getDivisions() as $division){
            $division->setStatus(false);
            $divisionsRepository->save($division,true);
        }
        $servicesRepository->save($service, true);
        return $this->redirectToRoute('app_services_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_services_delete', methods: ['POST'])]
    public function delete(Request $request, Services $service, ServicesRepository $servicesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $servicesRepository->remove($service, true);
        }

        return $this->redirectToRoute('app_services_index', [], Response::HTTP_SEE_OTHER);
    }
}

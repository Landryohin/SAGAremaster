<?php

namespace App\Controller;

use App\Entity\Directions;
use App\Entity\Postes;
use App\Form\DirectionsType;
use App\Repository\DirectionsRepository;
use App\Repository\DivisionsRepository;
use App\Repository\PostesRepository;
use App\Repository\ServicesRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/directions')]
class DirectionsController extends AbstractController
{
    #[Route('/', name: 'app_directions_index', methods: ['GET','POST'])]
    public function index(DirectionsRepository $directionsRepository, UsersRepository $usersRepository,PostesRepository $postesRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        /*foreach($directionsRepository->findAll() as $direction){
            if(!$direction->getOwner())
            {
                $direction->setOwner($user);
                $directionsRepository->save($direction,true);
            }
            if($direction->getDirecteur() && !$postesRepository->findOneByAgent($direction->getDirecteur()->getId())){
                $poste = new Postes();
                $poste->setNiveau("Directeur");
                $poste->setFonction($direction->getCode());
                $poste->setAgent($direction->getDirecteur());
                $poste->setType("PERMANENT");
                $poste->setDateDeb(new \DateTimeImmutable("now"));
                $poste->setOwner($user);
                $postesRepository->save($poste,true);
            }
            
        }*/
        if(isset($_REQUEST['submit'],$_POST['key']) && !empty($_POST['key']))
            $directions = $directionsRepository->findBySearch($_POST['key']);
        else $directions = $directionsRepository->findAll();

        return $this->render('directions/index.html.twig', [
            'directions' => $directions,
        ]);
    }

    #[Route('/new', name: 'app_directions_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DirectionsRepository $directionsRepository, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $direction = new Directions();
        $direction->setOwner($user);
        $form = $this->createForm(DirectionsType::class, $direction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $directionsRepository->save($direction, true);

            return $this->redirectToRoute('app_directions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('directions/new.html.twig', [
            'direction' => $direction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_directions_show', methods: ['GET'])]
    public function show(Directions $direction, DirectionsRepository $directionsRepository): Response
    {
        return $this->render('directions/show.html.twig', [
            'direction' => $direction,
            'services' => $directionsRepository->getServices($direction->getCode()),
            'divisions' =>$directionsRepository->getDivisions($direction->getCode()),
            'users' => $directionsRepository->getUsers($direction->getCode()),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_directions_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Directions $direction,DirectionsRepository $directionsRepository, PostesRepository $postesRepository): Response
    {
        $old = $direction->getCode();
        $form = $this->createForm(DirectionsType::class, $direction);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $new = $direction->getCode();
            if($new != $old)  $postesRepository->updateFonction($old, $new);

            $directionsRepository->save($direction, true);
            
            return $this->redirectToRoute('app_directions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('directions/edit.html.twig', [
            'direction' => $direction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_directions_play', methods: ['GET'])]
    public function play(Directions $direction, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository): Response
    {
        foreach($direction->getServices() as $service){
            foreach($service->getDivisions() as $division){
                $division->setStatus(true);
                $divisionsRepository->save($division,true);
            }
            $service->setStatus(true);
            $servicesRepository->save($service,true);
        }
        $direction->setStatus(true);
        $directionsRepository->save($direction, true);
        return $this->redirectToRoute('app_directions_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_directions_stop', methods: ['GET'])]
    public function stop( Directions $direction, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository): Response
    {
        foreach($direction->getServices() as $service){
            foreach($service->getDivisions() as $division){
                $division->setStatus(false);
                $divisionsRepository->save($division,true);
            }
            $service->setStatus(false);
            $servicesRepository->save($service,true);
        }
        $direction->setStatus(false);
        $directionsRepository->save($direction, true);
        return $this->redirectToRoute('app_directions_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_directions_delete', methods: ['POST'])]
    public function delete(Request $request, Directions $direction, DirectionsRepository $directionsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$direction->getId(), $request->request->get('_token'))) {
            $directionsRepository->remove($direction, true);
        }

        return $this->redirectToRoute('app_directions_index', [], Response::HTTP_SEE_OTHER);
    }
}

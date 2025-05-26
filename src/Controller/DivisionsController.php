<?php

namespace App\Controller;

use App\Entity\Postes;
use App\Entity\Divisions;
use App\Form\DivisionsType;
use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use App\Repository\PostesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/divisions')]
class DivisionsController extends AbstractController
{
    #[Route('/', name: 'app_divisions_index', methods: ['GET','POST'])]
    public function index(DivisionsRepository $divisionsRepository, UsersRepository $usersRepository, PostesRepository $postesRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        /*foreach($divisionsRepository->findAll() as $division){
            if(!$division->getOwner()){
                $division->setOwner($user);
                $divisionsRepository->save($division,true);
            }
            if($division->getChef() && !$postesRepository->findOneByAgent($division->getChef()->getId())){
                $poste = new Postes();
                $poste->setNiveau("Division");
                $poste->setFonction($division->getCode());
                $poste->setAgent($division->getChef());
                $poste->setType("PERMANENT");
                $poste->setDateDeb(new \DateTimeImmutable("now"));
                $poste->setOwner($user);
                $postesRepository->save($poste,true);
            }
        }*/
        if(isset($_REQUEST['submit'],$_POST['key']) && !empty($_POST['key']))
            return $this->render('divisions/index.html.twig', [
                'divisions' => $divisionsRepository->findBySearch($_POST['key']),
            ]);
        return $this->render('divisions/index.html.twig', [
            'divisions' => $divisionsRepository->getDivisions(),
        ]);
    }

    #[Route('/new', name: 'app_divisions_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DivisionsRepository $divisionsRepository, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $division = new Divisions();
        $division->setOwner($user);
        $form = $this->createForm(DivisionsType::class, $division);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $divisionsRepository->save($division, true);

            return $this->redirectToRoute('app_divisions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('divisions/new.html.twig', [
            'division' => $division,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_divisions_show', methods: ['GET'])]
    public function show(Divisions $division,DivisionsRepository $divisionsRepository): Response
    {
        return $this->render('divisions/show.html.twig', [
            'division' => $division,
            'users' => $divisionsRepository->getUsers($division->getCode()),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_divisions_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Divisions $division, DivisionsRepository $divisionsRepository, PostesRepository $postesRepository): Response
    {
        $old = $division->getCode();
        $form = $this->createForm(DivisionsType::class, $division);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $new = $division->getCode();        
            if($new != $old)    $postesRepository->updateFonction($old, $new);
            $divisionsRepository->save($division, true);
            return $this->redirectToRoute('app_divisions_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('divisions/edit.html.twig', [
            'division' => $division,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_divisions_play', methods: ['GET'])]
    public function play( Divisions $division, DivisionsRepository $divisionsRepository): Response
    {
        $division->setStatus(true);
        $divisionsRepository->save($division, true);
        return $this->redirectToRoute('app_divisions_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/{id}/stop', name: 'app_divisions_stop', methods: ['GET'])]
    public function stop( Divisions $division, DivisionsRepository $divisionsRepository): Response
    {
        $division->setStatus(false);
        $divisionsRepository->save($division, true);
        return $this->redirectToRoute('app_divisions_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_divisions_delete', methods: ['POST'])]
    public function delete(Request $request, Divisions $division, DivisionsRepository $divisionsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$division->getId(), $request->request->get('_token'))) {
            $divisionsRepository->remove($division, true);
        }

        return $this->redirectToRoute('app_divisions_index', [], Response::HTTP_SEE_OTHER);
    }
}

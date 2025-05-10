<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use App\Repository\DirectionsRepository;
use App\Repository\DivisionsRepository;
use App\Repository\ServicesRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/users')]
class UsersController extends AbstractController
{
    #[Route('/', name: 'app_users_index', methods: ['GET','POST'])]
    public function index(UsersRepository $usersRepository): Response
    {
        /*$owner = $usersRepository->findById($this->getUser()->getUserIdentifier());
        foreach($usersRepository->findAll() as $user){
            if(!$user->getOwner()){
                $user->setOwner($owner);
                $usersRepository->save($user,true);
            }
        }*/
        if(isset($_REQUEST['submit'],$_POST['key']) && !empty($_POST['key']))
        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findBySearch($_POST['key']),
        ]);
        return $this->render('users/index.html.twig', [
            'users' => $usersRepository->findAllUers(),
        ]);
    }

    #[Route('/new', name: 'app_users_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UsersRepository $usersRepository, UserPasswordHasherInterface $hash,DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $owner = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $User = new Users();
        $User->setOwner($owner);
        $form = $this->createForm(UsersType::class, $User);
        $form->handleRequest($request);
        $User->setPassword($hash->hashPassword($User,$User->getPassword()));
        if ($form->isSubmitted() && $form->isValid()) {
            $role = $form->get('roles')->getData();
            if($role)
            $User->setRoles($role);
            /*$tmp = explode(getPrenom()," ");
            $email= "";
            foreach($tmp as $t) $email.=$t[0];
            $email.=$User->getNom()."@finances.bj";*/
            $User->setEmail(strtolower($User->getPrenom()[0].$User->getNom())."@finances.bj");
            $usersRepository->save($User,true);
            if($User->getNiveau() == "Directeur" && $User->getZone() != "DGAML"){
                $Direction = $directionsRepository->findOneByCode($User->getZone());
                $Direction->setDirecteur($User);
                $directionsRepository->save($Direction);
            }
            else if($User->getNiveau() == "Service"){
                $Service = $servicesRepository->findOneByCode($User->getZone());
                $Service->setChef($User);
                $servicesRepository->save($Service);
            }
            else if($User->getNiveau() == "Division"){
                $Division = $divisionsRepository->findOneByCode($User->getZone());
                $Division->setChef($User);
                $divisionsRepository->save($Division,true);
            }
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/new.html.twig', [
            'user' => $User,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_users_show', methods: ['GET'])]
    public function show(Users $user): Response
    {
        return $this->render('users/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Users $User, UsersRepository $usersRepository,DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $oldNiveau = $User->getNiveau();
        $oldZone = $User->getZone();
        $form = $this->createForm(UsersType::class, $User);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            /*$tmp = explode(getPrenom()," ");
            $email= "";
            foreach($tmp as $t) $email.=$t[0];
            $email.=$User->getNom()."@finances.bj";*/
            //$User->setEmail(strtolower($User->getPrenom()[0].$User->getNom())."@finances.bj");
            $newNiveau = $form->get('Niveau')->getData();    
            $newZone = $form->get('Zone')->getData();     
            if($newNiveau != $oldNiveau || $newZone!= $oldZone)
            {
                if($oldNiveau && $oldNiveau == "Directeur")
                {
                    $direction = $directionsRepository->findOneByCode($oldZone);
                    $direction->setDirecteur(null);
                    $directionsRepository->save($direction,true);
                }else if($oldNiveau &&  $oldNiveau == "Service")
                {
                    $service = $servicesRepository->findOneByCode($oldZone);
                    $service->setChef(null);
                    $servicesRepository->save($service,true);
                }else if($oldNiveau &&  $oldNiveau == "Division")
                {
                    $division = $divisionsRepository->findOneByCode($oldZone);
                    $division->setChef(null);
                    $divisionsRepository->save($division,true);
                }

                if($newNiveau && $newNiveau == "Directeur")
                {
                    $direction = $directionsRepository->findOneByCode($newZone);
                    $direction->setDirecteur($User);
                    $directionsRepository->save($direction,true);
                }else if($newNiveau &&  $newNiveau == "Service")
                {
                    $service = $servicesRepository->findOneByCode($newZone);
                    $service->setChef($User);
                    $servicesRepository->save($service,true);
                }else if($newNiveau &&  $newNiveau == "Division")
                {
                    $division = $divisionsRepository->findOneByCode($newZone);
                    $division->setChef($User);
                    $divisionsRepository->save($division,true);
                }
                $User->setZone($newZone);
                $User->setNiveau($newNiveau);
            }
            $usersRepository->save($User,true);
            return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('users/edit.html.twig', [
            'user' => $User,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_users_play', methods: ['GET'])]
    public function play(Users $user, UsersRepository $usersRepository): Response
    {
        $user->setStatus(true);
        $usersRepository->save($user, true);
        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_users_stop', methods: ['GET'])]
    public function stop( Users $user, UsersRepository $usersRepository): Response
    {
        $user->setStatus(false);
        $usersRepository->save($user, true);
        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/resetPassword', name: 'app_users_resetPassword', methods: ['GET'])]
    public function resetPassword( Users $User, UsersRepository $usersRepository, UserPasswordHasherInterface $hash): Response
    {
        $User->setPassword($hash->hashPassword($User,"123456789"));
        $usersRepository->save($User, true);
        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_users_delete', methods: ['POST'])]
    public function delete(Request $request, Users $user, UsersRepository $usersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $usersRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }
}

<?php

namespace App\Controller;

use App\Repository\PostesRepository;
use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'login')]
    public function login(AuthenticationUtils $authenticationUtils, UsersRepository $userRepository, PostesRepository $postesRepository, UserPasswordHasherInterface $hash): Response
    {
        // $User = new Users();
        //     $User->setNom("ADMIN");
        //     $User->setPrenom("Admin");
        //     $User->setPassword($hash->hashPassword($User,"123456789"));
        //     $User->setRoles(["ROLE_ADMIN"]);
        //     $User->setNiveau("Admin");
        //     $User->setZone("DGML");
        //     $User->setEmail("admin@admin.admin");
        //     $userRepository->save($User,true);
       
        if($this->getUser())
        {
            dd($this->getUser());
            $user = $userRepository->findById($this->getUser()->getUserIdentifier());   
            if ($user && $user->getStatus()) {
            $postes = $postesRepository->findByAgent($user->getId());
            if ($postes && $postes != [] && count($postes) == 1) {
                $user->setNiveau($postes[0]->getNiveau());
                $user->setZone($postes[0]->getFonction());
                $userRepository->save($user,true);
                return $this->redirectToRoute('Accueil');
            }
            elseif($postes && $postes != []) return $this->redirectToRoute('poste');
            }
        }
        
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        //dd($error);
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/poste', name: 'poste', methods: ['GET','POST'])]
    public function poste(UsersRepository $usersRepository, PostesRepository $postesRepository){
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());            
        if ($user && $user->getStatus()) {
            if(isset($_GET['id']) && !empty($_GET['id'])){
                $poste = $postesRepository->find($_GET['id']);
                if($poste){
                    $user->setNiveau($poste->getNiveau());
                    $user->setZone($poste->getFonction());
                    $usersRepository->save($user,true);
                    return $this->redirectToRoute('Accueil');
                }
            }

            $postes = $postesRepository->findByAgent($user->getId());
            foreach($postes as $p){
                if($p->getDateFin() && $p->getDateFin()< (new \DateTimeImmutable("now"))) {
                    $p->setStatus(false);
                    $postesRepository->save($p,true);
                }
            }

            $postes = $postesRepository->findByAgent($user->getId());
            if($postes != [] && count($postes) == 1){
                $user->setNiveau($postes[0]->getNiveau());
                $user->setZone($postes[0]->getFonction());
                $usersRepository->save($user,true);
                return $this->redirectToRoute('Accueil');
            }elseif ($postes != []) return $this->render('security/login_poste.html.twig',[
                'postes' =>$postes,
                'user' => $user,
            ]); 
        }                                        
        return $this->redirectToRoute('logout', [], Response::HTTP_SEE_OTHER);
    }

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}

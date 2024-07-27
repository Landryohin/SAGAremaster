<?php


namespace App\Controller;

use App\Form\PasswordAccountType;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class PasswordController extends AbstractController
{
    /**
     * @param Request $request
     * @param UserPasswordHasherInterface $hasher
     * @return Response
     */
    #[Route('/password', name: 'changePassword')]
    public function index(Request $request, UserPasswordHasherInterface $hash, UsersRepository $userRepository): Response
    {
        $notification = null;
        $User = $this->getUser();
        if($this->getUser()){
            $user = $userRepository->findById($this->getUser()->getUserIdentifier());
            $form = $this->createForm(PasswordAccountType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() and $form->isValid()) {
                if ($hash->isPasswordValid($user, $form->get('old_password')->getData())) {
                    $user->setPassword($hash->hashPassword($user,$form->get('password')->getData()));
                    $userRepository->save($user,true);
                    return $this->redirectToRoute('logout');
                } else {
                    $notification = "Votre mot de passe est incorrecte";
                }
            }
            return $this->render('users/changePassword.html.twig',
                ['user' => $User,
                'form' => $form->createView(),
                    'notification' => $notification
                ]); 
        }
        return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
    }


 
}
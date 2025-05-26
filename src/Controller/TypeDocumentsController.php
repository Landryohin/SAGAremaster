<?php

namespace App\Controller;

use App\Entity\TypeDocuments;
use App\Form\TypeDocumentsType;
use App\Repository\UsersRepository;
use App\Repository\TypeDocumentsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/type/documents')]
class TypeDocumentsController extends AbstractController
{
    #[Route('/', name: 'app_type_documents_index', methods: ['GET','POST'])]
    public function index(TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        foreach($typeDocumentsRepository->findAll() as $typeDocument){
            if($typeDocument->getStatus() ===null){
                $typeDocument->setStatus(true);
                $typeDocumentsRepository->save($typeDocument,true);
            }
        }
        if(isset($_REQUEST['submit'],$_POST['key']) && !empty($_POST['key']))
        return $this->render('type_documents/index.html.twig', [
            'type_documents' => $typeDocumentsRepository->findBySearch($_POST['key']),
        ]);
        return $this->render('type_documents/index.html.twig', [
            'type_documents' => $typeDocumentsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_type_documents_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeDocumentsRepository $typeDocumentsRepository, UsersRepository $usersRepository): Response
    {
        $user = $usersRepository->findById($this->getUser()->getUserIdentifier());
        $typeDocument = new TypeDocuments();
        $typeDocument->setOwner($user);
        $form = $this->createForm(TypeDocumentsType::class, $typeDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeDocumentsRepository->save($typeDocument, true);

            return $this->redirectToRoute('app_type_documents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_documents/new.html.twig', [
            'type_document' => $typeDocument,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_documents_show', methods: ['GET'])]
    public function show(TypeDocuments $typeDocument): Response
    {
       
        return $this->render('type_documents/show.html.twig', [
            'type_document' => $typeDocument,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_documents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeDocuments $typeDocument, TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        $form = $this->createForm(TypeDocumentsType::class, $typeDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeDocumentsRepository->save($typeDocument, true);

            return $this->redirectToRoute('app_type_documents_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_documents/edit.html.twig', [
            'type_document' => $typeDocument,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/play', name: 'app_type_documents_play', methods: ['GET'])]
    public function play(TypeDocuments $typeDocument, TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        $typeDocument->setStatus(true);
        $typeDocumentsRepository->save($typeDocument, true);
        return $this->redirectToRoute('app_type_documents_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/stop', name: 'app_type_documents_stop', methods: ['GET'])]
    public function stop( TypeDocuments $typeDocument, TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        $typeDocument->setStatus(false);
        $typeDocumentsRepository->save($typeDocument, true);
        return $this->redirectToRoute('app_type_documents_index', [], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/{id}', name: 'app_type_documents_delete', methods: ['POST'])]
    public function delete(Request $request, TypeDocuments $typeDocument, TypeDocumentsRepository $typeDocumentsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeDocument->getId(), $request->request->get('_token'))) {
            $typeDocumentsRepository->remove($typeDocument, true);
        }

        return $this->redirectToRoute('app_type_documents_index', [], Response::HTTP_SEE_OTHER);
    }
}

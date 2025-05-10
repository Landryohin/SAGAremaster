<?php

namespace App\Controller;


use App\Entity\Users;
use App\Entity\Directions;
use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DocumentsRepository;
use App\Repository\DirectionsRepository;
use App\Repository\PostesRepository;
use App\Repository\SecretariatsRepository;
use App\Repository\TypeDocumentsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'Accueil', methods: ['GET', 'POST'])]
    public function index(SecretariatsController $secretariatsController, PostesRepository $postesRepository, SecretariatsRepository $secretariatsRepository, TypeDocumentsRepository $typeDocumentsRepository, UsersRepository $userRepository, DocumentsRepository $documentsRepository, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository): Response
    {
        $DG = $this->getParameter('dg');
        $DGA = $this->getParameter('dga');
        if ($this->getUser()) {
            $user = $userRepository->findById($this->getUser()->getUserIdentifier());
            $direction = $assistant = $secretaire = $particulier = $administratif = $supAdministratif = $speciale =   false;
            $secretaire = $secretariatsController->verify($postesRepository, $user, $directionsRepository, $secretariatsRepository, $servicesRepository, $divisionsRepository);
            if ($secretaire) {
                if ($secretaire == "ASSISTANT") $assistant = true;
                elseif ($secretaire == "ADMINISTRATIF") $administratif = true;
                elseif ($secretaire == "PARTICULIER") $particulier = true;
                if ($secretaire  && $secretaire != "ASSISTANT")  $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
                $direction = $directionsRepository->findBySecretaire($user->getZone())[0];
            }
            $documents = [];
            if (isset($_REQUEST['submit']) || isset($_GET['keywords'])) {
                $type = $begin = $end = $key = null;
                if (isset($_POST['type']) && $_POST['type'] != "ALL") $type = $_POST['type'];
                if (isset($_POST['begin']) && !empty($_POST['begin'])) $begin = $_POST['begin'];
                if (isset($_POST['end']) && !empty($_POST['end'])) $end = $_POST['end'];
                if (isset($_POST['keywords']) && !empty($_POST['keywords'])) $key = $_POST['keywords'];
                if (isset($_GET['keywords']) && !empty($_GET['keywords'])) $key =  $_GET['keywords'];
                if ($user->getNiveau() == "Admin")  $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, null, 50);
                elseif (($user->getNiveau() == "Directeur" && $user->getZone() == $DG) ||  $particulier) {
                    $poste = [$DG, $DGA, $secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(), $secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()];
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, $poste, 50);
                } elseif ($assistant || $administratif)
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, $secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(), 50);
                elseif ($secretaire && $direction)
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, [$user->getZone(), $direction->getCode()], 50);
                elseif ($user->getNiveau() == "Directeur")
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, $directionsRepository->getAllCode($user->getZone()), 50);
                elseif ($user->getNiveau() == "Service")
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, $servicesRepository->getAllCode($user->getZone()), 50);
                elseif ($user->getNiveau() == "Division" || $user->getNiveau() == "DGA")
                    $documents = $documentsRepository->findBySearch($type, $begin, $end, $key, $user->getZone(), 50);
            } else {
                if ($user->getNiveau() == "Admin")  $documents =  $documentsRepository->findAllDesc(50);
                elseif (($user->getNiveau() == "Directeur"  && $user->getZone() == $DG) || $particulier) {
                    $poste = [$DG, $DGA, $secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(), $secretariatsRepository->findSecretaireByType('PARTICULIER')->getSecretaire()];
                    $documents = $documentsRepository->findDocumentByAffectaction($poste, 50);
                } elseif ($assistant || $administratif)
                    $documents = $documentsRepository->findDocumentByAffectaction($secretariatsRepository->findSecretaireByType('ADMINISTRATIF')->getSecretaire(), 50);
                elseif ($secretaire && $direction)
                    $documents = $documentsRepository->findDocumentByAffectaction([$user->getZone(), $direction->getCode()], 50);
                elseif ($user->getNiveau() == "Directeur")
                    $documents = $documentsRepository->findDocumentByAffectaction($directionsRepository->getAllCode($user->getZone()), 50);
                elseif ($user->getNiveau() == "Service")
                    $documents = $documentsRepository->findDocumentByAffectaction($servicesRepository->getAllCode($user->getZone()), 50);
                elseif ($user->getNiveau() == "Division" || $user->getNiveau() == "DGA")
                    $documents = $documentsRepository->findDocumentByAffectaction($user->getZone(), 50);
                elseif ($user->getNiveau() == "Agent")   $documents = $documentsRepository->findDocumentByAffectactionAgent($user->getId());
            }
            if (($user->getNiveau() == "Directeur"  && $user->getZone() == $DG) || $user->getNiveau() == "Admin")
                $types = $typeDocumentsRepository->findAllOrderByLibelle();
            elseif ($secretaire  && $direction) $types = $typeDocumentsRepository->findAllOrderByPoste([$user->getZone(), $direction->getCode()]);
            elseif ($secretaire) $types = $typeDocumentsRepository->findAllOrderByPoste($user->getZone());
            else $types = $typeDocumentsRepository->findAllOrderByPoste($user->getId());

            //pour retourner a la normale page il faut remplacer le render par home/index.html.twig et supprimmer secretaire et speciale
            return $this->render('documents/index.html.twig', [
                'documents' => $documents,
                'types' => $types,
                'user' => $user,
                'secretaire' => $secretaire,
                'speciale' => $speciale,
                'assistant' => $assistant,

                'supAdministratif' => $supAdministratif,

                'dir' => $this->getParameter('documents_dir') . "/",
            ]);
        } else return $this->redirectToRoute('login', [], Response::HTTP_SEE_OTHER);
    }
}

<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Services;
use App\Entity\Divisions;
use App\Entity\Directions;
use App\Form\InitialisedDataType;
use App\Repository\UsersRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Repository\DirectionsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Reader\Csv as ReaderCsv;
use PhpOffice\PhpSpreadsheet\Reader\Ods as ReaderOds;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as ReaderXlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class InitialisedDataController extends AbstractController
{
    /*#[Route('/initialised/data', name: 'app_initialised_data')]
    public function index(): Response
    {
        return $this->render('initialised_data/index.html.twig', [
            'controller_name' => 'InitialisedDataController',
        ]);
    }*/

    protected function loadFile($filename)
    {
        return IOFactory::load($filename);
    }

    protected function readFile($filename)
    {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        switch ($extension) {
            case 'ods':
                $reader = new ReaderOds();
                break;
            case 'xlsx':
                $reader = new ReaderXlsx();
                break;
            case 'csv':
                $reader = new ReaderCsv();
                break;
            default:
                //throw new \Exception('Invalid extension');
                $reader = new ReaderXlsx();
        }
        $reader->setReadDataOnly(true);
        return $reader->load($filename);
    }

    protected function createDataFromSpreadsheet($spreadsheet)
    {
        $data = [];
        foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
            if($worksheet->getTitle() != "Feuil1")
            {
                $worksheetTitle = $worksheet->getTitle();
                $data[$worksheetTitle] = [
                    'columnNames' => [],
                    'columnValues' => [],
                ];
                foreach ($worksheet->getRowIterator() as $row) {
                    $rowIndex = $row->getRowIndex();
                    $ligne = [];
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(false); // Loop over all cells, even if it is not set
                    foreach ($cellIterator as $cell) {
                        if ($rowIndex === 1) {
                            $data[$worksheetTitle]['columnNames'][] = $cell->getCalculatedValue();
                        }
                        if ($rowIndex > 1 && $cell->getCalculatedValue()!= null && $cell->getCalculatedValue()!= " ") {
                            $ligne[] = $cell->getCalculatedValue();
                        }
                    }
                    if ($rowIndex > 1 && $ligne != [] ) {
                        $data[$worksheetTitle]['columnValues'][$rowIndex] = $ligne;
                    }
                }
            }
            
        }

        return $data;
    }

    #[Route('/admin/initialised/data', name: 'app_initialised_data', methods: ['GET', 'POST'])]
    public function index(Request $request ,UsersRepository $usersRepository, UserPasswordHasherInterface $hash,DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository, DivisionsRepository $divisionsRepository) :Response
    {
        $form = $this->createForm(InitialisedDataType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $spreadsheetData = $this->readFile($form->get('datum')->getData());
            $data = $this->createDataFromSpreadsheet($spreadsheetData);
            $Directions = $data['Directions']["columnValues"];
            foreach($Directions as $datum){
                if($datum != []){
                    $Direction = new Directions();
                    $Direction->setCode($datum[0]);
                    $Direction->setLibelle($datum[1]);
                    $directionsRepository->save($Direction,true);
                    if($datum[0] != "DGAML" && $datum[0] != "DGML")
                    {
                        $Service = new Services();
                        $Service->setCode($datum[0]);
                        $Service->setLibelle($datum[1]);
                        $Service->setDirection($directionsRepository->findOneByCode($datum[0]));
                        $servicesRepository->save($Service,true);
                    }
                }
            }

            $Services = $data['Services']["columnValues"];
            foreach($Services as $datum){
                if($datum != []){
                    $Service = new Services();
                    $Service->setCode($datum[0]);
                    $Service->setLibelle($datum[1]);
                    $direction = $directionsRepository->findOneByCode($datum[2]);
                    $Service->setDirection($direction);
                    $direction->addServices($Service);
                    $servicesRepository->save($Service,true);
                }
            }
            $Divisions = $data['Divisions']["columnValues"];
            foreach($Divisions as $datum){
                if($datum != []){
                    $Division = new Divisions();
                    $Division->setCode($datum[0]);
                    $Division->setLibelle($datum[1]);
                    $service = $servicesRepository->findOneByCode($datum[2]);
                    $Division->setService($service);
                    $service->addDivisions($Division);
                    $divisionsRepository->save($Division,true);
                }
            }

            $spreadsheetData = $this->readFile($form->get('user')->getData());
            $data = $this->createDataFromSpreadsheet($spreadsheetData);
            $agents = $data['Agents']["columnValues"];
            foreach($agents as $datum){
                if($datum != []){
                    $User = new Users();
                    $User->setNom($datum[0]);
                    $User->setPrenom($datum[1]);
                    $User->setPassword($hash->hashPassword($User,"123456789"));
                    $User->setRoles(["ROLE_USER"]);
                    $User->setNiveau($datum[3]);
                    $User->setZone($datum[2]);
                    /*$tmp = explode($datum[1]," ");
                    $email= "";
                    foreach($tmp as $t) $email.=$t[0];
                    $email.=$datum[0]."@finances.bj";*/
                    $User->setEmail(strtolower($datum[1][0].$datum[0])."@finances.bj");
                    $usersRepository->save($User,true);
                    if($datum[3] == "Directeur" && $datum[2] != "DGAML"){
                        $Direction = $directionsRepository->findOneByCode($datum[2]);
                        $Direction->setDirecteur($User);
                        $directionsRepository->save($Direction,true);
                    }
                    else if($datum[3] == "Service"){
                        $Service = $servicesRepository->findOneByCode($datum[2]);
                        $Service->setChef($User);
                        $servicesRepository->save($Service,true);
                    }
                    else if($datum[3] == "Division"){
                        $Division = $divisionsRepository->findOneByCode($datum[2]);
                        $Division->setChef($User);
                        $divisionsRepository->save($Division,true);
                    }
                }
            }
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('initialised_data/index.html.twig',['form' => $form->createView()]);
    }
}

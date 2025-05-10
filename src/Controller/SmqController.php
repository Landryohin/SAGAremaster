<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SmqController extends AbstractController
{
    #[Route('/smq', name: 'app_smq')]
    public function index(): Response
    {
        return $this->render('smq/index.html.twig', [
            'controller_name' => 'SmqController',
        ]);
    }
}

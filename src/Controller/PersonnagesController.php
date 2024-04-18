<?php

namespace App\Controller;

use App\Repository\PersonnagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PersonnagesController extends AbstractController
{
    #[Route('/personnages', name: 'app_personnages')]
    // public function index(): Response
    // {
    //     return $this->render('personnages/index.html.twig', [
    //         'controller_name' => 'PersonnagesController',
    //     ]);
    // }

    public function index(PersonnagesRepository $repository): Response
    {
        $personnages = $repository->findAll();
        return $this->render('personnages/index.html.twig', [
            'Personnages' => $personnages,
        ]);
    }
}
